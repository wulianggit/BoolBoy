var Login = function () {
    var init = function () {
        $('#login #password').focus(function() {
            $('#owl-login').addClass('password');
        }).blur(function() {
            $('#owl-login').removeClass('password');
        });
    }();

    return {
        initLogin : init
    }
}();
