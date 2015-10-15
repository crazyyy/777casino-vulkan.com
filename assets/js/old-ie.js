
function init_check_fields(container_sel) {
    var container = $(container_sel);
    if (!container.length) return;
    var active_class = 'js-checked';

    container.find('input:radio, input:checkbox').each(function () {
        var input = $(this);
        if (input.is(':checked')) {
            input.addClass(active_class);
        }
    }).change(function () {
        var input = $(this);
        var rel_inputs = [];
        if (input.is(':radio')) {
            var name = input.attr('name');
            rel_inputs = container.find('input[name="' + name + '"]');
        }
        if (input.is(':checked')) {
            if (rel_inputs.length) {
                rel_inputs.removeClass(active_class);
            }
            input.addClass(active_class);
        } else {
            if (rel_inputs.length) {
                rel_inputs.addClass(active_class);
            }
            input.removeClass(active_class);
        }
    });
}

jQuery(function () {
    init_check_fields('#user_panel');
});