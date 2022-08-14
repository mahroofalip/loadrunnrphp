$(function () {


    //BEGIN PLUGINS DATE PICKER
    $('.datepicker-default').datepicker();
    $('.datepicker-years').datepicker({
        startView: 1,
        minViewMode: 2
    });
    $('.input-daterange').datepicker({
        format: "dd-mm-yyyy"
    });
    $('.datepicker-inline').datepicker({
        format: "dd-mm-yyyy",
        startView: 2,
        minViewMode: 1
    });
    //END PLUGINS DATE PICKER

    //BEGIN PLUGINS DATETIME PICKER
    $('.datetimepicker-default').datetimepicker();
    $('.datetimepicker-disable-date').datetimepicker({
        pickDate: false
    });
    $('.datetimepicker-disable-time').datetimepicker({
        pickTime: false
    });
    $('.datetimepicker-start').datetimepicker();
    $('.datetimepicker-end').datetimepicker();
    $('.datetimepicker-start').on("change.dp",function (e) {
        $('.datetimepicker-end').data("DateTimePicker").setStartDate(e.date);
    });
    $('.datetimepicker-end').on("change.dp",function (e) {
        $('.datetimepicker-start').data("DateTimePicker").setEndDate(e.date);
    });
    //END PLUGINS DATETIME PICKER

    //BEGIN PLUGINS TIME PICKER
    $('.timepicker-default').timepicker();
    $('.timepicker-24hr').timepicker({
        autoclose: true,
        minuteStep: 1,
        showSeconds: true,
        showMeridian: false
    });
    //END PLUGINS TIME PICKER

    //BEGIN PLUGINS CLOCKFACE TIME PICKER
    $('.clockface-default').clockface();
    $('.clockface-component').clockface({
        format: 'HH:mm',
        trigger: 'manual'
    });

    $('#btn-clockface-component').click(function(e){
        e.stopPropagation();
        $('.clockface-component').clockface('toggle');
    });

    $('.clockface-inline').clockface({
        format: 'H:mm'
    }).clockface('show', '14:30');
    //END PLUGINS CLOCKFACE TIME PICKER

    //BEGIN PLUGINS COLOR PICKER
    $('.colorpicker-default').colorpicker();
    $('.colorpicker-rgba').colorpicker();
    $('.colorpicker-component').colorpicker({
        format: 'hex'
    }).on('changeColor', function(ev) {
            $('.colorpicker-component span i').css('color',ev.color.toHex());
            $('.colorpicker-component input').val(ev.color.toHex());
        });
    //END PLUGINS COLOR PICKER

    // BEGIN PLUGIN MASK INPUT
    $("#date").mask("99/99/9999");
    $("#phone").mask("(999) 999-9999");
    $("#product-key").mask("(aa) 99-999")
    // END PLUGIN MASK INPUT

    //BEGIN CHARACTER COUNT
    $("#message1, #message2").charCount();
    $("#message3").charCount({
        allowed: 50,
        warning: 20,
        counterText: 'Characters left: '
    });
    //END CHARACTER COUNT

});
