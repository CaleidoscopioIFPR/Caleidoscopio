$(function () {
    $("button#btnEntrar").on("click", function (e) {
        e.preventDefault();
        var classe = $("form#formLogin").attr("class");
        if (classe == "esqueci") {

            var campoEmail = $("form#formLogin #emailLogin").val();
            if (campoEmail.trim() == '') {
                $("div#mensagem").show();
                $("div#mensagem").html("Preencha o seu email");
            } else {
                $.ajax({
                    url: "acess/acesso.php",
                    type: "POST",
                    data: {
                        type: "Esqueci",
                        email: campoEmail,
                    },

                    success: function (retorno) {
                        retorno = JSON.parse(retorno);


                        if (retorno["erro"]) {
                            $("div#mensagem").show();
                            $("div#mensagem").html(retorno["mensagem"]);
                        }

                    },
                    error: function () {
                        $("div#mensagem").show();
                        $("div#mensagem").html("Ocorreu um erro durante a solicitação do servidor");
                    }
                });
            }
        } else {
            var campoEmail = $("form#formLogin #emailLogin").val();
            var campoSenha = $("form#formLogin #senhaLogin").val();


            if (campoEmail.trim() == '' || campoSenha.trim() == '') {
                $("div#mensagem").show();
                $("div#mensagem").html("Preencha todos os campos");

            } else {
                $.ajax({
                    url: "acess/acesso.php",
                    type: "POST",
                    data: {
                        type: "Login",
                        email: campoEmail,
                        senha: campoSenha,
                    },

                    success: function (retorno) {
                        retorno = JSON.parse(retorno);


                        if (retorno["erro"] == 1) {
                            $("div#mensagem").show();
                            $("div#mensagem").html(retorno["mensagem"]);
                        } else if (retorno["erro"] == 2) {
                            $("div#mensagem").show();
                            $("div#mensagem").html(retorno["mensagem"]);
                        } else {
                            window.location = "dashboard.php";
                        }

                    },
                    error: function () {
                        $("div#mensagem").show();
                        $("div#mensagem").html("Ocorreu um erro durante a solicitação do servidor");
                    }
                });
            }
        }
    });


    $("button#btnCadastro").on("click", function (e) {
        e.preventDefault();

        var campoNome = $("form#formCadastro #nomeCadastro").val();
        var campoSobrenome = $("form#formCadastro #sobrenomeCadastro").val();
        var campoEmail = $("form#formCadastro #emailCadastro").val();
        var campoSenha = $("form#formCadastro #senhaCadastro").val();
        var campoConfirmarSenha = $("form#formCadastro #confirmarSenhaCadastro").val();


        if (campoNome.trim() == '' || campoSobrenome.trim() == '' || campoEmail.trim() == '' || campoSenha.trim() == '') {
            $("div#mensagem").show();
            $("div#mensagem").html("Preencha todos os campos");

        } 
        else if(campoSenha != campoConfirmarSenha) {
            $("div#mensagem").show();
            $("div#mensagem").html("As senhas não são iguais!!!");
        }

        else {
            $.ajax({
                url: "acess/acesso.php",
                type: "POST",
                data: {
                    type: "Cadastro",
                    nome: campoNome,
                    sobrenome: campoSobrenome,
                    email: campoEmail,
                    senha: campoSenha,
                    confirmarSenha: campoConfirmarSenha,
                },

                success: function (retorno) {
                    retorno = JSON.parse(retorno);

                    if (retorno["erro"] == 1) {
                        $("div#mensagem").show();
                        $("div#mensagem").html(retorno["mensagem"]);
                    }
                    else if (retorno["erro"] == 2) {
                        $("div#mensagem").show();
                        $("div#mensagem").html("Enviamos um e-mail de confirmação para " + campoEmail + "");
                        $("form#formCadastro").hide();
                    }

                },
                error: function () {
                    $("div#mensagem").show();
                    $("div#mensagem").html("Ocorreu um erro durante a solicitação do servidor");
                }
            });
        }
    });

    $("a#esquecisenha").on("click", function () {
        $("form#formLogin").addClass("esqueci");
        $("form#formLogin span.titleLogin").html("Digite o seu e-mail para recuperar sua conta :D");
        $("form#formLogin button#btnEntrar").html("Enviar");

        $("div#MsgCadastro").hide();
        $("form#formLogin div#linha.senha").hide();
        $(this).hide();

        $("div#mensagem").hide();
    });

    $("div#MsgCadastro button#btnCadastrar").on("click", function () {
        $("form#formLogin").hide();
        $("form#formCadastro").show();

        $("div#MsgCadastro").hide();
        $("div#MsgLogin").show();

        $("div#mensagem").hide();
    });
    $("button#btnLogin").on("click", function () {
        $("form#formLogin").show();
        $("form#formCadastro").hide();

        $("div#MsgCadastro").show();
        $("div#MsgLogin").hide();

        $("div#mensagem").hide();
    });

});