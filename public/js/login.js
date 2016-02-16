$(document).ready(function() {

    var container = $("#container");
    var login = container.find("#login");
    var form_login = login.find("#form_login");
    var bt_login = form_login.find("#bt_login");
    var mensagem = container.find("#mensagem");


    var mensagem_erro = function(mensagem, tipo, titulo) {
        var erro = '';
        erro += '<div class="alert alert-' + tipo + '">';
        erro += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
        erro += '<h4>' + titulo + '</h4>';
        erro += mensagem;
        erro += '</div>';
        return erro;
    };


    bt_login.on('click', function(event) {
        event.preventDefault();
        $.ajax({
            url: 'login.php',
            type: 'post',
            data: form_login.serialize(),
            beforeSend: function() {
                mensagem.html('<img src="public/imagens/ajax-loader.gif" />');
            },
            success: function(data) {
                if (data.length > 0 && data !== 'email') {
                    var mensagem_sucesso = '';
                    mensagem_sucesso += '<div class="alert alert-success">';
                    mensagem_sucesso += '<h4>Sucesso !</h4>';
                    mensagem_sucesso += 'Logado com sucesso !';
                    mensagem_sucesso += '</div>';
                    mensagem.html(mensagem_sucesso);
                    setTimeout("window.location.href = '" + data + "'", 2000);
                } else {
                    if (data === 'email') {
                        mensagem.html(mensagem_erro('E-mail inválido', 'error', 'Erro'));
                    } else {
                        mensagem.html(mensagem_erro('Erro ao logar', 'error', 'Erro'));
                    }

                }
            }
        });

    });

});