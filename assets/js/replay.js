$(function() {
    $('#sticky-header').sticky({
        topSpacing: 0,
        zIndex: 1000,
        center: true,
    });
    $('#go-to-top').on('click', function(e) {
        e.preventDefault();
        $(window).scrollTo(0, 'fast');
    });
    $(document).on('click', '[data-role="jump-to-anchor"]', function(e) {
        e.preventDefault();
        var targetId = '#page-section-' + $(this).data('id');
        $(window).scrollTo($(targetId), {
            offset: -80,
            duration: 'slow',
        });
    });
    $('#go-to-bottom').on('click', function(e) {
        e.preventDefault();
        $(window).scrollTo($(document).height(), 'fast');
    });
    var pageSectionIndex = 1;
    $('h2').each(function() {
        // セクションボタンの設定
        var prevId = (pageSectionIndex - 1);
        var id = pageSectionIndex;
        var nextId = (pageSectionIndex + 1);
        $(this).attr('id', 'page-section-' + id);
        $(this).attr('data-prev-id', prevId);
        $(this).attr('data-id', id);
        $(this).attr('data-next-id', nextId);
        // set page top navigation
        var rendered = Mustache.render($('#page-navigate-anchor').html(), {
            previd: prevId,
            nextid: nextId,
            id: id,
            text: $(this).text(),
            pageindex: pageSectionIndex,
        });
        $('#go-to-bottom').before(rendered);
        // modify section header name
        // $(this).html('<span class="section-icon"></span>' + pageSectionIndex + '. ' + $(this).text());
        // waypointの設定
        pageSectionIndex += 1;
        var waypoint = new Waypoint({
            element: $(this),
            handler: function(direction) {
                var prevId = this.element.data('prev-id');
                var id = this.element.data('id');
                var nextId = this.element.data('next-id');
                if (direction == 'up') {
                    $('#sticky-header').find('[data-id="' + prevId + '"]').addClass('active');
                    $('#sticky-header').find('[data-id="' + id + '"]').removeClass('active');
                } else if (direction == 'down') {
                    $('#sticky-header').find('[data-id="' + id + '"]').addClass('active');
                    $('#sticky-header').find('[data-id="' + prevId + '"]').removeClass('active');
                }
            },
            offset: 100,
        });
    });
    // note: WayPointの初期化が終わってから
    $('[data-toggle="tooltip"]').tooltip({
        'container': 'body',
    });
});