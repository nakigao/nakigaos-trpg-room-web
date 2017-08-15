$(function() {

    $('[data-trigger="update-all"]').on('click', function() {
        $.ajax({
            type: 'GET',
            url: '/shnb/get-random',
            dataType: 'json',
            cache: false,
            success: function(data, status, jqXHR) {
                updateFullName(data.full_name);
                updateOmotenokao(data.omotenokao);
                updateKetumei(data.ketumei);
                updateOugi(data.ougi);
            },
            error: function() {
            },
        });
    });

    $('[data-trigger="update-full-name"]').on('click', function() {
        $.ajax({
            type: 'GET',
            url: '/shnb/get-random-full-name',
            dataType: 'json',
            cache: false,
            success: function(data, status, jqXHR) {
                updateFullName(data.full_name);
            },
            error: function() {
            },
        });
    });

    $('[data-trigger="update-omotenokao"]').on('click', function() {
        $.ajax({
            type: 'GET',
            url: '/shnb/get-random-omotenokao',
            dataType: 'json',
            cache: false,
            success: function(data, status, jqXHR) {
                updateOmotenokao(data.omotenokao);
            },
            error: function() {
            },
        });
    });

    $('[data-trigger="update-ketumei"]').on('click', function() {
        $.ajax({
            type: 'GET',
            url: '/shnb/get-random-ketumei',
            dataType: 'json',
            cache: false,
            success: function(data, status, jqXHR) {
                updateKetumei(data.ketumei);
            },
            error: function() {
            },
        });
    });

    $('[data-trigger="update-ougi"]').on('click', function() {
        $.ajax({
            type: 'GET',
            url: '/shnb/get-random-ougi',
            dataType: 'json',
            cache: false,
            success: function(data, status, jqXHR) {
                updateOugi(data.ougi);
            },
            error: function() {
            },
        });
    });

    function updateFullName(data) {
        var sex = '男';
        switch (data.sex) {
            case '1':
                sex = '男/女';
                break;
            case '2':
                sex = '男';
                break;
            case '3':
                sex = '女';
                break;
        }
        var html =
            '<ruby>'
            + data.family_name + data.name + '<rt>' + data.family_name_kana + data.name_kana + '</rt>'
            + '</ruby>'
            + '(' + sex + ')';
        $('#full-name').html(html);
    }

    function updateOmotenokao(data) {
        $('#omotenokao').html(data.name);
    }

    function updateKetumei(data) {
        $('#ketumei').html(
            '<ruby>'
            + data.name + '<rt>' + data.name_kana + '</rt>'
            + '</ruby>'
        );
    }

    function updateOugi(data) {
        $('#ougi').html(
            '<ruby>'
            + data.name + '<rt>' + data.name_kana + '</rt>'
            + '</ruby>'
        );
    }

    // initialization
    $('[data-trigger="update-all"]').trigger('click');

});