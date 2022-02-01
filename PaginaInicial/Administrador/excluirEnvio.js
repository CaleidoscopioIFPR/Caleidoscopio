$(function() {
    $("button.noBt").on("click", function() {
        var idUsuario = $(this).attr("idUsuario");

        $.ajax({
            url: "excluirUsuario.php",
            type: "POST",
            data: {
                id: idUsuario
            },

            success: function(retorno) {
                retorno = JSON.parse(retorno);
                console.log(retorno);
            },

            error: function() {
                alert("Erro")
            }
        });
    });
    $("button.noBt").on("click", function() {
        confirm("Voce tem certeza que deseja excluir essa solicitação?")
    })
});




