$(function() {

    $('[data-action="select-pc-card"]').on('change', function() {
        var $that = $(this);
        var id = $(this).val();
        if (id == 0) {
            $that.siblings('[data-action="pc-card-description"]').empty();
            return false;
        }
        $.ajax({
            type: 'GET',
            url: '/nvnv/get-card' + '/horror/pc/' + id,
            dataType: 'json',
            cache: false,
            success: function(data, status, jqXHR) {
                var rendered = Mustache.render($('#template-pc-card-description').html(), {
                    'gender': data.card.gender,
                    'role': data.card.role,
                    'power': data.card.power,
                    'technic': data.card.technic,
                    'skill_description': data.card.skill_description.replace(/\r\n/g, "<br />"),
                    'skill_name': data.card.skill_name,
                    'skill_timing': data.card.skill_timing,
                });
                $that.siblings('[data-action="pc-card-description"]').html(rendered);
                $that.siblings('[data-action="add-character"]').data('role-name', data.card.role);
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
            url: '/nvnv/get-random-card/horror/introduction',
            dataType: 'json',
            cache: false,
            beforeSend: function(jqXHR, settings) {
                $that.siblings('.card-description').empty();
            },
            success: function(data, status, jqXHR) {
                var rendered = Mustache.render($('#template-introduction-card-description').html(), {
                    'title': data.card.title,
                    'description': data.card.description.replace(/\r\n/g, "<br />"),
                    'is_horror': data.card.is_horror,
                });
                $that.siblings('.card-description').html(rendered);
                markAsAlreadyCardDraw($that, 'REDRAW');
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
            url: '/nvnv/get-random-card/horror/scene',
            dataType: 'json',
            cache: false,
            beforeSend: function(jqXHR, settings) {
                $that.siblings('.card-description').empty();
            },
            success: function(data, status, jqXHR) {
                var rendered = Mustache.render($('#template-scene-card-description').html(), {
                    'title': data.card.title,
                    'description': data.card.description.replace(/\r\n/g, "<br />"),
                    'judgement_type': data.card.judgement_type,
                    'judgement_description': data.card.judgement_description.replace(/\r\n/g, "<br />"),
                    'is_horror': data.card.is_horror,
                });
                $that.siblings('[data-action="scene-card-description"]').html(rendered);
                markAsAlreadyCardDraw($that, 'REDRAW');
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
            url: '/nvnv/get-random-card/horror/light',
            dataType: 'json',
            cache: false,
            beforeSend: function(jqXHR, settings) {
                $that.siblings('.card-description').empty();
            },
            success: function(data, status, jqXHR) {
                var rendered = Mustache.render($('#template-light-card-description').html(), {
                    'title': data.card.title,
                    'description': data.card.description.replace(/\r\n/g, "<br />"),
                    'effect_type': data.card.effect_type,
                    'effect_description': data.card.effect_description.replace(/\r\n/g, "<br />"),
                    'is_horror': data.card.is_horror,
                });
                $that.siblings('[data-action="light-card-description"]').html(rendered);
                markAsAlreadyCardDraw($that, 'REDRAW');
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
            url: '/nvnv/get-random-card/horror/darkness',
            dataType: 'json',
            cache: false,
            beforeSend: function(jqXHR, settings) {
                $that.siblings('.card-description').empty();
            },
            success: function(data, status, jqXHR) {
                var rendered = Mustache.render($('#template-darkness-card-description').html(), {
                    'title': data.card.title,
                    'description': data.card.description.replace(/\r\n/g, "<br />"),
                    'effect_type': data.card.effect_type,
                    'effect_description': data.card.effect_description.replace(/\r\n/g, "<br />"),
                    'is_horror': data.card.is_horror,
                });
                $that.siblings('[data-action="darkness-card-description"]').html(rendered);
                markAsAlreadyCardDraw($that, 'REDRAW');
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
            url: '/nvnv/get-random-card/horror/climax',
            dataType: 'json',
            cache: false,
            beforeSend: function(jqXHR, settings) {
                $that.siblings('.card-description').empty();
            },
            success: function(data, status, jqXHR) {
                var rendered = Mustache.render($('#template-climax-card-description').html(), {
                    'title': data.card.title,
                    'description': data.card.description.replace(/\r\n/g, "<br />"),
                    'judgement': data.card.judgement.replace(/\r\n/g, "<br />"),
                    'is_horror': data.card.is_horror,
                });
                $that.siblings('[data-action="climax-card-description"]').html(rendered);
                markAsAlreadyCardDraw($that, 'REDRAW');
            },
            error: function() {
            },
        });
    });

    $('[data-action="go-to-edit-card"]').on('mouseenter', function(e){
        $(this).css('background-color', '#B1DDE1');
        $(this).css('cursor', 'pointer');
    });
    $('[data-action="go-to-edit-card"]').on('mouseleave', function(e){
        $(this).css('background-color', '#FFFFFF');
        $(this).css('cursor', 'auto');
    });
    $('[data-action="go-to-edit-card"]').on('click', function(e){
        location.href = $(this).data('url');
    });

    $('[data-action="card-save"]').on('click', function(e){
        var $that = $(this);
        var params = $('form[name=card-edit-form]').serializeArray();
        $.ajax({
            type: 'POST',
            url: '/nvnv/card-save/',
            data: params,
            dataType: 'json',
            cache: false,
            success: function(data, status, jqXHR) {
                $that.removeClass('btn-primary btn-danger').addClass('btn-success').html(data.message.toUpperCase());
            },
            error: function(data) {
                $that.removeClass('btn-primary btn-success').addClass('btn-danger').html(data.message.toUpperCase());
            },
        });
    });

    $('[data-action="card-save-and-go"]').on('click', function(e){
        var $that = $(this);
        var params = $('form[name=card-edit-form]').serializeArray();
        $.ajax({
            type: 'POST',
            url: '/nvnv/card-save/',
            data: params,
            dataType: 'json',
            cache: false,
            success: function(data, status, jqXHR) {
                location.href = $that.data('next-url');
            },
            error: function(data) {
                $that.removeClass('btn-primary btn-success').addClass('btn-danger').html(data.message.toUpperCase());
            },
        });
    });

    $('[data-action="add-message-card"]').on('click', function(e){
        var $that = $(this);
        if (!confirmReSend($that)) {
            return false;
        }
        var server = getServerInformation();
        var text = $that.siblings('.card-description').html();
        var back = $that.data('card-type').toUpperCase() + ' CARD';
        if (!text) {
            alert('カードを引いてから実行してください');
            return false;
        }
        markAsAlreadySend($that);
        $.jsonp({
            url: server.url,
            timeout: 3000,
            callbackParameter: 'callback',
            data: {
                'room': server.room,
                'password': server.password,
                'webif': 'addMessageCard',
                'text': text,
                'back': back,
                'fontSize': 6,
            },
            success: function(result, status, xhr) {
                // alert('ok');
            },
            error: function(xhr, status, error) {
                // alert('Something error occurred.');
            },
        });
        $.jsonp({
            url: server.url,
            timeout: 3000,
            callbackParameter: 'callback',
            data: {
                'room': server.room,
                'password': server.password,
                'webif': 'talk',
                'name': server.your_name,
                'color': '#212121',
                'message': '「' + back + '」を追加しました。(カードを自分の管理にして、公開しましょう)',
            },
            success: function(result, status, xhr) {
                // alert('ok');
            },
            error: function(xhr, status, error) {
                // alert('Something error occurred.');
            },
        });
    });

    $('[data-action="add-character"]').on('click', function(e){
        var $that = $(this);
        if (!confirmReSend($that)) {
            return false;
        }
        var server = getServerInformation();
        var text = $that.siblings('.card-description').html();
        var pcName = server.your_name.substring(0, server.your_name.indexOf('@')) + '@' + $that.data('role-name');
        if (!text) {
            alert('キャラクターを選択してから実行してください');
            return false;
        }
        markAsAlreadySend($that);
        $.jsonp({
            url: server.url,
            timeout: 3000,
            callbackParameter: 'callback',
            data: {
                'room': server.room,
                'password': server.password,
                'webif': 'addCharacter',
                'name': pcName,
                'info': text.replace(/<br\s*[\/]?>/gi, "\n")
            },
            success: function(result, status, xhr) {
                // alert('ok');
            },
            error: function(xhr, status, error) {
                // alert('Something error occurred.');
            },
        });
        $.jsonp({
            url: server.url,
            timeout: 3000,
            callbackParameter: 'callback',
            data: {
                'room': server.room,
                'password': server.password,
                'webif': 'talk',
                'name': server.your_name,
                'color': '#212121',
                'message': '「' + pcName + '」をキャラクターとして追加しました。',
            },
            success: function(result, status, xhr) {
                // alert('ok');
            },
            error: function(xhr, status, error) {
                // alert('Something error occurred.');
            },
        });
    });

});

function markAsAlreadyCardDraw($element, $alternativeWord)
{
    if (!$element) {
        return false;
    }
    if (!$alternativeWord) {
        $element.removeClass('btn-default').addClass('btn-info drew');
    } else {
        $element.removeClass('btn-default').addClass('btn-info drew').html($alternativeWord);
    }
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

function markAsAlreadySend($element, $alternativeWord)
{
    if (!$element) {
        return false;
    }
    if (!$alternativeWord) {
        $element.removeClass('btn-default').addClass('btn-info sent');
    } else {
        $element.removeClass('btn-default').addClass('btn-info sent').html($alternativeWord);
    }
}

function confirmReSend($element)
{
    if ($element.hasClass('sent')) {
        if(!confirm('送信しなおす？')){
            return false;
        }else{
            return true;
        }
    }
    return true;
}

/**
 *
 * @returns {Object}
 */
function getServerInformation() {
    var serialize = $('form[name=server-information]').serializeArray();
    // 連想配列にして返却
    var associativeArray = {};
    for (idx in serialize) {
        var key   = serialize[idx]["name"];
        var value = serialize[idx]["value"];
        associativeArray[key] = value;
    }
    return associativeArray;
}