$(document).ready(function() {
    $(".nav").find(".active").removeClass("active");
    $('a[href="' + this.location.pathname + '"]').parent().addClass('active');
});