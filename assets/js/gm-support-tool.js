/**
 *
 * @returns {Object}
 */
function getCommonFormData() {
    var formObj = $('#common-form');
    var data = [];
    data.url = formObj.find('#url').val();
    data.room = formObj.find('#room-number').val();
    data.password = formObj.find('#room-password').val();
    data.dice = formObj.find('#dice-bot').val();
    return data;
}
/**
 *
 * @param formObj
 * @returns {Object}
 */
function getTalkData(formObj) {
    var formObj = formObj;
    var data = [];
    data.name = formObj.find('[id^=\'talk-name\']').val();
    data.color = formObj.find('[id^=\'talk-color\']').val().replace('#', '');
    data.message = formObj.find('[id^=\'talk-message\']').val();
    data.webif = 'talk';
    formObj.find('[id^=\'talk-message\']').val('');
    return data;
}
/**
 *
 * @param message
 */
function setDodontofMessages(message) {
    $('#dodontof-messages pre').text(message);
}
/**
 *
 * @param targetObj
 * @returns {boolean}
 */
function processTalk(targetObj) {
    var commonData = getCommonFormData();
    var systemData = getTalkData(targetObj);
    if (systemData.message == '') {
        setDodontofMessages('Empty messages ... abort');
        return false;
    }
    $.jsonp({
        'url': commonData.url,
        'timeout': 3000,
        'callbackParameter': 'callback',
        'data': {
            'room': commonData.room,
            'password': commonData.password,
            'bot': commonData.dice,
            'webif': systemData.webif,
            'name': systemData.name,
            'color': systemData.color,
            'message': systemData.message,
        },
        'success': function(result, status, xhr) {
            setDodontofMessages(JSON.stringify(result));
            targetObj.find('textarea').val('');
            targetObj.find('input[id^="talk-message"]').val('');
        },
        'error': function(xhr, status, error) {
            setDodontofMessages(JSON.stringify(error));
        },
    });
}
$('[data-role="color-picker"]').paletteColorPicker({
    colors: [
        //black
        {'212121': '#212121'},
        // //white
        // {'ffffff': '#ffffff'},
        //red
        {'f44336': '#f44336'},
        //pink
        {'e91e63': '#e91e63'},
        //purple
        {'9c27b0': '#9c27b0'},
        //deep-purple
        {'673ab7': '#673ab7'},
        //indigo
        {'3f51b5': '#3f51b5'},
        //blue
        {'2196f3': '#2196f3'},
        //light-blue
        {'03a9f4': '#03a9f4'},
        //cyan
        {'00bcd4': '#00bcd4'},
        //teal
        {'009688': '#009688'},
        //green
        {'4caf50': '#4caf50'},
        //light-green
        {'8bc34a': '#8bc34a'},
        //lime
        {'cddc39': '#cddc39'},
        //yellow
        {'ffeb3b': '#ffeb3b'},
        //amber
        {'ffc107': '#ffc107'},
        //orange
        {'ff9800': '#ff9800'},
        //deep-orange
        {'ff5722': '#ff5722'},
        //brown
        {'795548': '#795548'},
        //gray
        {'9e9e9e': '#9e9e9e'},
        //blue-gray
        {'607d8b': '#607d8b'},
    ],
    position: 'downside',
});

$('#talk-form-system button').on('click', function(e) {
    processTalk($('#talk-form-system'));
});
$('#talk-form-gm button').on('click', function(e) {
    processTalk($('#talk-form-gm'));
});
$('#talk-message-gm').on('keydown', function(e) {
    if (e.keyCode === 13) {
        $('#talk-form-gm button').trigger('click');
    }
});
// PL発言に関する
$('#talk-message-pl').on('keydown', function(e) {
    if (e.keyCode === 13) {
        $('#talk-form-pl button').trigger('click');
    }
});
$('#talk-form-pl button').on('click', function(e) {
    processTalk($('#talk-form-pl'));
});
$('#set-room-info-form button').on('click', function(e) {
    var formObj = $('#set-room-info-form');
    var commonData = getCommonFormData();
    var data = [];
    data.counter = formObj.find('#set-room-info-counter').val();
    data.chatTab = formObj.find('#set-room-info-chat-tab').val();
    data.roomName = formObj.find('#set-room-info-room-name').val();
    data.outerImage = formObj.find('#set-room-info-outer-image').val();
    data.game = formObj.find('#set-room-info-game').val();
    data.visit = formObj.find('#set-room-info-visit').val();
    data.callback = formObj.find('#set-room-info-callback').val();
    data.webif = formObj.find('#set-room-info-webif').val();
    $.jsonp({
        'url': commonData.url,
        'timeout': 3000,
        'callbackParameter': 'callback',
        'data': {
            'room': commonData.room,
            'password': commonData.password,
            'bot': commonData.dice,
            'webif': data.webif,
            'counter': data.counter,
            'chatTab': data.chatTab,
            'roomName': data.roomName,
            'outerImage': data.outerImage,
            'game': data.game,
            'visit': data.visit,
        },
        'success': function(result, status, xhr) {
            setDodontofMessages(JSON.stringify(result));
        },
        'error': function(xhr, status, error) {
            setDodontofMessages(JSON.stringify(error));
        },
    });
});
$('#add-character-form button').on('click', function(e) {
    var formObj = $('#add-character-form');
    var commonData = getCommonFormData();
    var data = [];
    data.name = formObj.find('#add-character-name').val();
    data.counters = formObj.find('#add-character-counters').val();
    data.info = formObj.find('#add-character-info').val();
    data.x = formObj.find('#add-character-x').val();
    data.y = formObj.find('#add-character-y').val();
    data.size = formObj.find('#add-character-size').val();
    data.initiative = formObj.find('#add-character-initiative').val();
    data.rotation = formObj.find('#add-character-rotation').val();
    data.image = formObj.find('#add-character-image').val();
    data.statusAlias = formObj.find('#add-character-status-alias').val();
    data.dogTag = formObj.find('#add-character-dog-tag').val();
    data.draggable = formObj.find('#add-character-draggable').val();
    data.isHide = formObj.find('#add-character-is-hide').val();
    data.url = formObj.find('#add-character-url').val();
    data.callback = formObj.find('#add-character-callback').val();
    data.webif = formObj.find('#add-character-webif').val();
    $.jsonp({
        'url': commonData.url,
        'timeout': 3000,
        'callbackParameter': 'callback',
        'data': {
            'room': commonData.room,
            'password': commonData.password,
            'bot': commonData.dice,
            'webif': data.webif,
            'name': data.name,
            'counters': data.counters,
            'info': data.info,
            'x': data.x,
            'y': data.y,
            'size': data.size,
            'initiative': data.initiative,
            'rotation': data.rotation,
            'image': data.image,
            'statusAlias': data.statusAlias,
            'dogTag': data.dogTag,
            'draggable': data.draggable,
            'isHide': data.isHide,
            'url': data.url,
        },
        'success': function(result, status, xhr) {
            setDodontofMessages(JSON.stringify(result));
        },
        'error': function(xhr, status, error) {
            setDodontofMessages(JSON.stringify(error));
        },
    });
});
$('#add-memo-form button').on('click', function(e) {
    var formObj = $('#add-memo-form');
    var commonData = getCommonFormData();
    var data = [];
    data.message = formObj.find('#add-memo-message').val();
    data.callback = formObj.find('#add-memo-callback').val();
    data.webif = formObj.find('#add-memo-webif').val();
    $.jsonp({
        'url': commonData.url,
        'timeout': 3000,
        'callbackParameter': 'callback',
        'data': {
            'room': commonData.room,
            'password': commonData.password,
            'bot': commonData.dice,
            'webif': data.webif,
            'message': data.message,
        },
        'success': function(result, status, xhr) {
            setDodontofMessages(JSON.stringify(result));
        },
        'error': function(xhr, status, error) {
            setDodontofMessages(JSON.stringify(error));
        },
    });
});
// 汎用トークフォームに関する
$('#talk-message-1').on('keydown', function(e) {
    if (e.keyCode === 13) {
        $('#talk-form-1 button').trigger('click');
    }
});
$('#talk-form-1 button').on('click', function(e) {
    processTalk($('#talk-form-1'));
});
$('#talk-message-2').on('keydown', function(e) {
    if (e.keyCode === 13) {
        $('#talk-form-2 button').trigger('click');
    }
});
$('#talk-form-2 button').on('click', function(e) {
    processTalk($('#talk-form-2'));
});
$('#talk-message-3').on('keydown', function(e) {
    if (e.keyCode === 13) {
        $('#talk-form-3 button').trigger('click');
    }
});
$('#talk-form-3 button').on('click', function(e) {
    processTalk($('#talk-form-3'));
});
$('#talk-message-4').on('keydown', function(e) {
    if (e.keyCode === 13) {
        $('#talk-form-4 button').trigger('click');
    }
});
$('#talk-form-4 button').on('click', function(e) {
    processTalk($('#talk-form-4'));
});
$('#talk-message-5').on('keydown', function(e) {
    if (e.keyCode === 13) {
        $('#talk-form-5 button').trigger('click');
    }
});
$('#talk-form-5 button').on('click', function(e) {
    processTalk($('#talk-form-5'));
});
$('#talk-message-6').on('keydown', function(e) {
    if (e.keyCode === 13) {
        $('#talk-form-6 button').trigger('click');
    }
});
$('#talk-form-6 button').on('click', function(e) {
    processTalk($('#talk-form-6'));
});