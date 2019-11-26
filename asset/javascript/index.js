$(document).ready(function () {

    $('#example tbody').on('click', '.remove', function () {
        var id = $(this).attr("data-codigo");
        var rowselect = $(this).parent().parent();
        $.ajax({
            url: 'controller/CompraController.php',
            type: 'GET',
            data: { action: 'excluir', codigo: id },
            success: function (data) {
                if (data.status == 'sucess') {
                    rowselect.fadeOut(600).remove();
                    $(".alert-success").show();
                    setTimeout(function () {
                        $(".alert-success").hide();
                    }, 3000);
                } else {
                    $(".alert-danger").show();
                    setTimeout(function () {
                        $(".alert-danger").hide();
                    }, 3000);
                }
                console.log(data);
            }
        });
    });


    


});