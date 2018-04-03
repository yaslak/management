$(document).ready(function () {
    function notify_success($title, $content) {
        new PNotify({
            title: $title,
            text: $content,
            addclass: 'bg-success'
        });
    }
    function notify_danger($title, $content) {
        new PNotify({
            title: $title,
            text: $content,
            addclass: 'bg-danger'
        });
    }

    $('body').on('click','#lang-switcher a',function () {
        var locale = $(this).attr('data-lang');
        var _token = $("form#language>input[name=_token]").val();
        $.ajax({
            url: "/language",
            type: 'POST',
            data:{locale:locale,_token:_token},
            datatype: 'json',
            success: function (data) {
            },
            error:function (data) {
            },
            beforeSend:function (data) {

            },
            complete:function (data) {
                window.location.reload(true);
            }
        })
    });
    var $auto_success = $('#auto-notify-success');
    if($auto_success.length){
        notify_success($auto_success.attr('data-title'),$auto_success.attr('data-content'))
        $auto_success.remove();
    }
    var $auto_danger = $('#auto-notify-danger');
    if($auto_danger.length){
        notify_danger($auto_danger.attr('data-title'),$auto_danger.attr('data-content'))
    }

});