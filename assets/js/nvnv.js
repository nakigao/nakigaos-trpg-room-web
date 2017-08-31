$(function() {

    $('[data-action="select-pc-card"]').on('change', function() {
        var $that = $(this);
        var id = $(this).val();
        if (id == 0) {
            $that.next('[data-action="pc-card-description"]').empty();
            return false;
        }
        $.ajax({
            type: 'GET',
            url: '/nvnv/get-pc-card' + '/' + id,
            dataType: 'json',
            cache: false,
            success: function(data, status, jqXHR) {
                var rendered = Mustache.render($('#template-pc-card-description').html(), {
                    'gender': data.pc_card[0].gender,
                    'role': data.pc_card[0].role,
                    'power': data.pc_card[0].power,
                    'technic': data.pc_card[0].technic,
                    'skill_description': data.pc_card[0].skill_description,
                    'skill_name': data.pc_card[0].skill_name,
                    'skill_timing': data.pc_card[0].skill_timing,
                });
                $that.next('[data-action="pc-card-description"]').html(rendered);
            },
            error: function() {
            },
        });
    });

    $('[data-action="draw-introduction-card"]').on('click', function() {
        var $that = $(this);
        if (!confirmReDraw($that)) {
            return false;
        }
        $.ajax({
            type: 'GET',
            url: '/nvnv/get-random-introduction-card',
            dataType: 'json',
            cache: false,
            success: function(data, status, jqXHR) {
                var rendered = Mustache.render($('#template-introduction-card-description').html(), {
                    'title': data.introduction_card[0].title,
                    'description': data.introduction_card[0].description,
                    'is_horror': data.introduction_card[0].is_horror,
                });
                $that.next('[data-action="introduction-card-description"]').html(rendered);
                markAlreadyCardDraw($that);
            },
            error: function() {
            },
        });
    });

    $('[data-action="draw-scene-card"]').on('click', function() {
        var $that = $(this);
        if (!confirmReDraw($that)) {
            return false;
        }
        $.ajax({
            type: 'GET',
            url: '/nvnv/get-random-scene-card',
            dataType: 'json',
            cache: false,
            success: function(data, status, jqXHR) {
                var rendered = Mustache.render($('#template-scene-card-description').html(), {
                    'title': data.scene_card[0].title,
                    'description': data.scene_card[0].description,
                    'judgement_type': data.scene_card[0].judgement_type,
                    'judgement_description': data.scene_card[0].judgement_description,
                    'is_horror': data.scene_card[0].is_horror,
                });
                $that.next('[data-action="scene-card-description"]').html(rendered);
                markAlreadyCardDraw($that);
            },
            error: function() {
            },
        });
    });

    $('[data-action="draw-light-card"]').on('click', function() {
        var $that = $(this);
        if (!confirmReDraw($that)) {
            return false;
        }
        $.ajax({
            type: 'GET',
            url: '/nvnv/get-random-light-card',
            dataType: 'json',
            cache: false,
            success: function(data, status, jqXHR) {
                var rendered = Mustache.render($('#template-light-card-description').html(), {
                    'title': data.light_card[0].title,
                    'description': data.light_card[0].description,
                    'effect_type': data.light_card[0].effect_type,
                    'effect_description': data.light_card[0].effect_description,
                    'is_horror': data.light_card[0].is_horror,
                });
                $that.next('[data-action="light-card-description"]').html(rendered);
                markAlreadyCardDraw($that);
            },
            error: function() {
            },
        });
    });

    $('[data-action="draw-darkness-card"]').on('click', function() {
        var $that = $(this);
        if (!confirmReDraw($that)) {
            return false;
        }
        $.ajax({
            type: 'GET',
            url: '/nvnv/get-random-darkness-card',
            dataType: 'json',
            cache: false,
            success: function(data, status, jqXHR) {
                var rendered = Mustache.render($('#template-darkness-card-description').html(), {
                    'title': data.darkness_card[0].title,
                    'description': data.darkness_card[0].description,
                    'effect_type': data.darkness_card[0].effect_type,
                    'effect_description': data.darkness_card[0].effect_description,
                    'is_horror': data.darkness_card[0].is_horror,
                });
                $that.next('[data-action="darkness-card-description"]').html(rendered);
                markAlreadyCardDraw($that);
            },
            error: function() {
            },
        });
    });

    $('[data-action="draw-climax-card"]').on('click', function() {
        var $that = $(this);
        if (!confirmReDraw($that)) {
            return false;
        }
        $.ajax({
            type: 'GET',
            url: '/nvnv/get-random-climax-card',
            dataType: 'json',
            cache: false,
            success: function(data, status, jqXHR) {
                var rendered = Mustache.render($('#template-climax-card-description').html(), {
                    'title': data.climax_card[0].title,
                    'description': data.climax_card[0].description,
                    'judgement': data.climax_card[0].judgement,
                    'is_horror': data.climax_card[0].is_horror,
                });
                $that.next('[data-action="climax-card-description"]').html(rendered);
                markAlreadyCardDraw($that);
            },
            error: function() {
            },
        });
    });

});

function markAlreadyCardDraw($element)
{
    if (!$element) {
        return false;
    }
    $element.removeClass('btn-default').addClass('btn-info drew').html('REDRAW');
}

function confirmReDraw($element)
{
    if ($element.hasClass('drew')) {
        if(!confirm('引き直す？')){
            return false;
        }else{
            return true;
        }
    }
    return true;
}
