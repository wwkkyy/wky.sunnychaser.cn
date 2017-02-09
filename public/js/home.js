function initial() {
    $.ajax({
        type: 'GET',
        url: '/home/initial',
        data: '',
        success: function (data) {
            console.log(data);
        }
    });
}

function register() {
    var username = $('#gameID').val();
    var password = $('#password').val();
    $.ajax({
        type: 'POST',
        url: '/login',
        data: {
            'username': username,
            'password': password
        },
        success: function (data) {
            dialog(data);
            $('body').on('click', '.weui-dialog__btn', function () {
                window.location.href = '/wechat/account';
            });
        }
    });
}