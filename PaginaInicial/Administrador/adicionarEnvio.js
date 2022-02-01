$(function() {
    $("button.yesBt").on("click", function(e) {

        var idUsuario = $(this).attr("idUsuario2");
        e.preventDefault();
        $.ajax({
            url: "../Acervo/index.php",
            type: "POST",
            data: {
                id: idUsuario
            },

            success: function(retorno) {
                alert(idUsuario)
                alert(retorno);
            },

            error: function() {
                alert("Erro")
            }
        });
    });
});




