/**
 *
 * @param classObj
 */
function setBackgroundColor(classObj) {
    classObj.css("background-color", classObj.val());
}
/**
 *
 * @returns {Object}
 */
function getCommonFormData() {
    var formObj = $("#common-form");
    var data = [];
    data.url = formObj.find("#url").val();
    data.room = formObj.find("#room-number").val();
    data.password = formObj.find("#room-password").val();
    data.dice = formObj.find("#dice-bot").val();
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
    data.name = formObj.find("[id^='talk-name']").val();
    data.color = formObj.find("[id^='talk-color']").val().replace('#', '');
    data.message = formObj.find("[id^='talk-message']").val();
    data.webif = 'talk';
    return data;
}
/**
 *
 * @param message
 */
function setDodontofMessages(message) {
    $("#dodontof-messages pre").text(message);
}
/**
 *
 * @param targetObj
 * @returns {boolean}
 */
function processTalk(targetObj) {
    var commonData = getCommonFormData();
    var systemData = getTalkData(targetObj);
    if (systemData.message == "") {
        setDodontofMessages("Empty messages ... abort");
        return false;
    }
    $.jsonp({
        "url": commonData.url,
        "timeout": 3000,
        "callbackParameter": "callback",
        "data": {
            "room": commonData.room,
            "password": commonData.password,
            "bot": commonData.dice,
            "webif": systemData.webif,
            "name": systemData.name,
            "color": systemData.color,
            "message": systemData.message
        },
        "success": function (result, status, xhr) {
            setDodontofMessages(JSON.stringify(result));
            targetObj.find('textarea').val('');
        },
        "error": function (xhr, status, error) {
            setDodontofMessages(JSON.stringify(error));
        }
    });
}
/**
 *
 * @param targetObj
 * @returns {boolean}
 */
function processTalkPreset(targetObj) {
    var commonData = getCommonFormData();
    var systemData = [];
    systemData.name = targetObj.find(".name").val() + "_" + targetObj.find(".counter").val();
    systemData.color = targetObj.find(".color").val().replace('#', '');
    systemData.message = targetObj.find(".message").val();
    systemData.webif = targetObj.find(".webif").val();
    if (systemData.message == "") {
        setDodontofMessages("Empty messages ... abort");
        return false;
    }
    $.jsonp({
        "url": commonData.url,
        "timeout": 3000,
        "callbackParameter": "callback",
        "data": {
            "room": commonData.room,
            "password": commonData.password,
            "bot": commonData.dice,
            "webif": systemData.webif,
            "name": systemData.name,
            "color": systemData.color,
            "message": systemData.message
        },
        "success": function (result, status, xhr) {
            setDodontofMessages(JSON.stringify(result));
        },
        "error": function (xhr, status, error) {
            setDodontofMessages(JSON.stringify(error));
        }
    });
}
/**
 *
 * @param targetObj
 * @returns {boolean}
 */
function processAddPresetCharacter(targetObj) {
    var commonData = getCommonFormData();
    var systemData = [];
    systemData.name = targetObj.find(".name").val() + "_" + targetObj.find(".counter").val();
    systemData.counters = targetObj.find(".counters").val();
    systemData.info = targetObj.find(".info").val();
    systemData.size = 1;
    systemData.initiative = 0;
    systemData.rotation = false;
    systemData.dogTag = targetObj.find(".counter").val();
    systemData.draggable = true;
    systemData.isHide = true;
    systemData.webif = "addCharacter";
    $.jsonp({
        "url": commonData.url,
        "timeout": 3000,
        "callbackParameter": "callback",
        "data": {
            "room": commonData.room,
            "password": commonData.password,
            "bot": commonData.dice,
            "webif": systemData.webif,
            "name": systemData.name,
            "counters": systemData.counters,
            "info": systemData.info,
            "size": systemData.size,
            "initiative": systemData.initiative,
            "rotation": systemData.rotation,
            "dogTag": systemData.dogTag,
            "draggable": systemData.draggable,
            "isHide": systemData.isHide
        },
        "success": function (result, status, xhr) {
            setDodontofMessages(JSON.stringify(result));
        },
        "error": function (xhr, status, error) {
            setDodontofMessages(JSON.stringify(error));
        }
    });
}
$(".select-color").each(function () {
    setBackgroundColor($(this));
});
$(".select-color").on("change", function (e) {
    setBackgroundColor($(this));
});
$("#talk-form-system button").on('click', function (e) {
    processTalk($("#talk-form-system"));
});
$("#talk-form-gm button").on('click', function (e) {
    processTalk($("#talk-form-gm"));
});
$("#set-room-info-form button").on('click', function (e) {
    var formObj = $("#set-room-info-form");
    var commonData = getCommonFormData();
    var data = [];
    data.counter = formObj.find("#set-room-info-counter").val();
    data.chatTab = formObj.find("#set-room-info-chat-tab").val();
    data.roomName = formObj.find("#set-room-info-room-name").val();
    data.outerImage = formObj.find("#set-room-info-outer-image").val();
    data.game = formObj.find("#set-room-info-game").val();
    data.visit = formObj.find("#set-room-info-visit").val();
    data.callback = formObj.find("#set-room-info-callback").val();
    data.webif = formObj.find("#set-room-info-webif").val();
    $.jsonp({
        "url": commonData.url,
        "timeout": 3000,
        "callbackParameter": "callback",
        "data": {
            "room": commonData.room,
            "password": commonData.password,
            "bot": commonData.dice,
            "webif": data.webif,
            "counter": data.counter,
            "chatTab": data.chatTab,
            "roomName": data.roomName,
            "outerImage": data.outerImage,
            "game": data.game,
            "visit": data.visit
        },
        "success": function (result, status, xhr) {
            setDodontofMessages(JSON.stringify(result));
        },
        "error": function (xhr, status, error) {
            setDodontofMessages(JSON.stringify(error));
        }
    });
});
$("#add-character-form button").on('click', function (e) {
    var formObj = $("#add-character-form");
    var commonData = getCommonFormData();
    var data = [];
    data.name = formObj.find("#add-character-name").val();
    data.counters = formObj.find("#add-character-counters").val();
    data.info = formObj.find("#add-character-info").val();
    data.x = formObj.find("#add-character-x").val();
    data.y = formObj.find("#add-character-y").val();
    data.size = formObj.find("#add-character-size").val();
    data.initiative = formObj.find("#add-character-initiative").val();
    data.rotation = formObj.find("#add-character-rotation").val();
    data.image = formObj.find("#add-character-image").val();
    data.statusAlias = formObj.find("#add-character-status-alias").val();
    data.dogTag = formObj.find("#add-character-dog-tag").val();
    data.draggable = formObj.find("#add-character-draggable").val();
    data.isHide = formObj.find("#add-character-is-hide").val();
    data.url = formObj.find("#add-character-url").val();
    data.callback = formObj.find("#add-character-callback").val();
    data.webif = formObj.find("#add-character-webif").val();
    $.jsonp({
        "url": commonData.url,
        "timeout": 3000,
        "callbackParameter": "callback",
        "data": {
            "room": commonData.room,
            "password": commonData.password,
            "bot": commonData.dice,
            "webif": data.webif,
            "name": data.name,
            "counters": data.counters,
            "info": data.info,
            "x": data.x,
            "y": data.y,
            "size": data.size,
            "initiative": data.initiative,
            "rotation": data.rotation,
            "image": data.image,
            "statusAlias": data.statusAlias,
            "dogTag": data.dogTag,
            "draggable": data.draggable,
            "isHide": data.isHide,
            "url": data.url
        },
        "success": function (result, status, xhr) {
            setDodontofMessages(JSON.stringify(result));
        },
        "error": function (xhr, status, error) {
            setDodontofMessages(JSON.stringify(error));
        }
    });
});
$("#add-memo-form button").on('click', function (e) {
    var formObj = $("#add-memo-form");
    var commonData = getCommonFormData();
    var data = [];
    data.message = formObj.find("#add-memo-message").val();
    data.callback = formObj.find("#add-memo-callback").val();
    data.webif = formObj.find("#add-memo-webif").val();
    $.jsonp({
        "url": commonData.url,
        "timeout": 3000,
        "callbackParameter": "callback",
        "data": {
            "room": commonData.room,
            "password": commonData.password,
            "bot": commonData.dice,
            "webif": data.webif,
            "message": data.message
        },
        "success": function (result, status, xhr) {
            setDodontofMessages(JSON.stringify(result));
        },
        "error": function (xhr, status, error) {
            setDodontofMessages(JSON.stringify(error));
        }
    });
});
$("#talk-form-1 button").on('click', function (e) {
    processTalk($("#talk-form-1"));
});
$("#talk-form-2 button").on('click', function (e) {
    processTalk($("#talk-form-2"));
});
$("#talk-form-3 button").on('click', function (e) {
    processTalk($("#talk-form-3"));
});
$("#talk-form-4 button").on('click', function (e) {
    processTalk($("#talk-form-4"));
});
$("#talk-form-5 button").on('click', function (e) {
    processTalk($("#talk-form-5"));
});
$("#talk-form-6 button").on('click', function (e) {
    processTalk($("#talk-form-6"));
});
$("#add-preset-character-form-unknown button").on('click', function (e) {
    processAddPresetCharacter($("#add-preset-character-form-unknown"));
});
$("#add-preset-character-form-npc button").on('click', function (e) {
    processAddPresetCharacter($("#add-preset-character-form-npc"));
});
$("#add-preset-character-form-enemy button").on('click', function (e) {
    processAddPresetCharacter($("#add-preset-character-form-enemy"));
});
$("#add-preset-character-form-dummy button").on('click', function (e) {
    processAddPresetCharacter($("#add-preset-character-form-dummy"));
});
$("#talk-preset-form-unknown button").on('click', function (e) {
    processTalkPreset($("#talk-preset-form-unknown"));
});
$("#talk-preset-form-npc button").on('click', function (e) {
    processTalkPreset($("#talk-preset-form-npc"));
});
$("#talk-preset-form-enemy button").on('click', function (e) {
    processTalkPreset($("#talk-preset-form-enemy"));
});