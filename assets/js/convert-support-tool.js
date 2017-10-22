$(function() {

    var clipboard = new Clipboard('[data-trigger="copy-to-clipboard" ]');
    clipboard.on('success', function(e) {
    });
    clipboard.on('error', function(e) {
    });

    // execute convert
    $('#file-form').on('change', function() {
        var formdata = new FormData($('#file-form').get(0));
        $.ajax({
            url: $(this).data('url'),
            type: 'POST',
            cache: false,
            processData: false,
            contentType: false,
            data: formdata,
            dataType: 'html',
            success: function(data) {
                $('#converted').html(data);
                // moge?
            },
        });
    });
});