/**
 *
 * @returns {Object}
 */
function getCommonFormData() {
    var formObj = $('#common-form');
    if (!formObj) {
        return false;
    }
    var serialize = formObj.serializeArray();
    var associativeArray = {};
    // 配列 -> 連想配列に
    for (idx in serialize) {
        var key = serialize[idx]['name'];
        var value = serialize[idx]['value'];
        associativeArray[key] = value;
    }
    return associativeArray;
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
 * @param $targetObj
 * @returns {boolean}
 */
function processTalk($targetObj) {
    // 送信中でも終わり
    if ($targetObj.find('[data-trigger="submit-talk"]').hasClass('sending')) {
        return false;
    }
    // set status "sending"
    $targetObj.find('[data-trigger="submit-talk"]').addClass('sending');
    // エラークリア
    var hasError = false;
    $targetObj.find('[name="talk-name"]').css('background-color', 'rgb(255, 255, 255)');
    $targetObj.find('[name="talk-role"]').css('background-color', 'rgb(255, 255, 255)');
    $targetObj.find('[name="talk-message"]').css('background-color', 'rgb(255, 255, 255)');
    // 送信用の共通データ取得
    var commonData = getCommonFormData();
    if (!commonData) {
        alert('something error occurred ... abort');
    }
    // 渡されたオブジェクトの中から、Talkに必要な中身を取得する
    var name = $targetObj.find('[name="talk-name"]').val();
    var role = $targetObj.find('[name="talk-role"]').val();
    var color = $targetObj.find('[name^="talk-color"]').val();
    var message = $targetObj.find('[name="talk-message"]').val();
    if (name == '') {
        $targetObj.find('[name="talk-name"]').css('background-color', '#f7dcdb');
        hasError = true;
    }
    if (role == '') {
        $targetObj.find('[name="talk-role"]').css('background-color', '#f7dcdb');
        hasError = true;
    }
    if (message == '') {
        $targetObj.find('[name="talk-message"]').css('background-color', '#f7dcdb');
        hasError = true;
    }
    if (hasError) {
        // remove status "sending"
        $targetObj.find('[data-trigger="submit-talk"]').removeClass('sending');
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
            'webif': 'talk',
            'name': name + '@' + role,
            'color': color,
            'message': message,
        },
        'success': function(result, status, xhr) {
            setDodontofMessages(JSON.stringify(result));
            $targetObj.find('[name="talk-message"]').val('');
        },
        'error': function(xhr, status, error) {
            setDodontofMessages(JSON.stringify(error));
        },
        'complete': function(){
            // remove status "sending"
            $targetObj.find('[data-trigger="submit-talk"]').removeClass('sending');
        }
    });
}

/**
 * カラーピッカーの設定
 */
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
/**
 * TALK送信 > メッセージ入力欄でENTER
 */
$('[name="talk-message"]').on('keydown', function(e) {
    // このフォームが属するTRを見つける
    var $targetForm = $(this).parents('tr');
    if (!$targetForm) {
        return false;
    }
    // ENTERが押されていたらSUBMIT
    if (e.keyCode === 13) {
        $targetForm.find('[data-trigger="submit-talk"]').trigger('click');
    }
});
/**
 * TALK送信 > GO!ボタン押下
 */
$('[data-trigger="submit-talk"]').on('click', function(e) {
    // このフォームが属するTRを見つける
    var $targetForm = $(this).parents('tr');
    if (!$targetForm) {
        return false;
    }
    processTalk($targetForm);
});
/**
 * 画面内のtalk-nameを上書き
 */
$('[name="talk-name-all"]').on('change input', function(e) {
    $('[name="talk-name"]').val($(this).val());
});