$(document).ready(function () {
    $('#form-login').on('submit', function (e) {
        e.preventDefault();
        var dados = $(this).serialize();
        $.ajax({
            url: 'controller/LoginController.php?action=autenticar',
            type: 'POST',
            data: dados,
            success: function (data) {
                if (data['success']) {
                    window.location.replace('index.php');
                } else {
                    $(".alert-danger").show();
                    setTimeout(function () {
                        $(".alert-danger").hide();
                    }, 3000);
                }
            }
        });
    });
});