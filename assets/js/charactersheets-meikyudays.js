$(function(){
    // auto calculation
    $('input[name="sheet[intelligence_i]"],input[name="sheet[intelligence_b]"],input[name="sheet[intelligence_g]"]').on('change', function() {
        var total = (Number($('input[name="sheet[intelligence_i]"]').val() || 0))
            + (Number($('input[name="sheet[intelligence_b]"]').val() || 0))
            + (Number($('input[name="sheet[intelligence_g]"]').val() || 0));
        $('input[name="sheet[intelligence]"]').val(total).trigger('change');
    });
    $('input[name="sheet[charisma_i]"],input[name="sheet[charisma_b]"],input[name="sheet[charisma_g]"]').on('change', function() {
        var total = (Number($('input[name="sheet[charisma_i]"]').val() || 0))
            + (Number($('input[name="sheet[charisma_b]"]').val() || 0))
            + (Number($('input[name="sheet[charisma_g]"]').val() || 0));
        $('input[name="sheet[charisma]"]').val(total).trigger('change');
    });
    $('input[name="sheet[survival_i]"],input[name="sheet[survival_b]"],input[name="sheet[survival_g]"]').on('change', function() {
        var total = (Number($('input[name="sheet[survival_i]"]').val() || 0))
            + (Number($('input[name="sheet[survival_b]"]').val() || 0))
            + (Number($('input[name="sheet[survival_g]"]').val() || 0));
        $('input[name="sheet[survival]"]').val(total).trigger('change');
    });
    $('input[name="sheet[strength_i]"],input[name="sheet[strength_b]"],input[name="sheet[strength_g]"]').on('change', function() {
        var total = (Number($('input[name="sheet[strength_i]"]').val() || 0))
            + (Number($('input[name="sheet[strength_b]"]').val() || 0))
            + (Number($('input[name="sheet[strength_g]"]').val() || 0));
        $('input[name="sheet[strength]"]').val(total).trigger('change');
    });
    // hitpoint calculation 1
    $('input[name="sheet[survival]"],input[name="sheet[strength]"],input[name="sheet[level]"]').on('change', function() {
        var total = (Number($('input[name="sheet[survival]"]').val() || 0))
            + (Number($('input[name="sheet[strength]"]').val() || 0))
            + (Number($('input[name="sheet[level]"]').val() || 0))
            + 5;
        $('input[name="sheet[hitpoint_i]"]').val(total).trigger('change');
    });
    // hitpoint calculation 2
    $('input[name="sheet[hitpoint_i]"],input[name="sheet[hitpoint_b]"]').on('change', function() {
        var total = (Number($('input[name="sheet[hitpoint_i]"]').val() || 0))
            + (Number($('input[name="sheet[hitpoint_b]"]').val() || 0));
        $('input[name="sheet[hitpoint]"]').val(total);
    });
    // capacity calculation 1
    $('input[name="sheet[intelligence]"],input[name="sheet[charisma]"]').on('change', function() {
        var total = (Number($('input[name="sheet[intelligence]"]').val() || 0))
            + (Number($('input[name="sheet[charisma]"]').val() || 0));
        total = Math.ceil(total/2);
        $('input[name="sheet[capacity_i]"]').val(total).trigger('change');
    });
    // capacity calculation 2
    $('input[name="sheet[capacity_i]"],input[name="sheet[capacity_b]"]').on('change', function() {
        var total = (Number($('input[name="sheet[capacity_i]"]').val() || 0))
            + (Number($('input[name="sheet[capacity_b]"]').val() || 0));
        $('input[name="sheet[capacity]"]').val(total);
    });
    // dexterity calculation 1
    $('input[name="sheet[survival]"]').on('change', function() {
        var total = (Number($('input[name="sheet[survival]"]').val() || 0))
            + 7;
        $('input[name="sheet[dexterity_i]"]').val(total).trigger('change');
    });
    // dexterity calculation 2
    $('input[name="sheet[dexterity_i]"],input[name="sheet[dexterity_b]"]').on('change', function() {
        var total = (Number($('input[name="sheet[dexterity_i]"]').val() || 0))
            + (Number($('input[name="sheet[dexterity_b]"]').val() || 0));
        $('input[name="sheet[dexterity]"]').val(total);
    });
    // followers calculation 1
    $('input[name="sheet[charisma]"],input[name="sheet[level]"]').on('change', function() {
        var total = (Number($('input[name="sheet[charisma]"]').val() || 0) * 5)
            + (Number($('input[name="sheet[level]"]').val() || 0))
        $('input[name="sheet[followers_i]"]').val(total).trigger('change');
    });
    // followers calculation 2
    $('input[name="sheet[followers_i]"],input[name="sheet[followers_b]"]').on('change', function() {
        var total = (Number($('input[name="sheet[followers_i]"]').val() || 0))
            + (Number($('input[name="sheet[followers_b]"]').val() || 0));
        $('input[name="sheet[followers]"]').val(total);
    });
});