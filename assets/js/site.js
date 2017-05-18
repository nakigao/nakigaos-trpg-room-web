$(function(){
    $('#year').text(new Date().getFullYear());
    $('[data-toggle="tooltip"]').tooltip({
        'container':'body'
    });
});