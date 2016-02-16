<html>
<head>
    <meta charset="utf-8"/>
    <title>Login Sistema Escolar</title>
    <link rel="stylesheet" href="public/css/styles.css" type="text/css"/>
    <link rel="stylesheet" href="public/css/bootstrap.css" type="text/css"/>
    <!--    <link href='http://fonts.googleapis.com/css?family=Anaheim'-->
    <!--          rel='stylesheet' type='text/css'>-->
</head>
<body>
<div id="container">

    <div id="login">
        <form class="form-horizontal" method="post" id="form_login" >
            <div class="control-group">
                <label class="control-label" for="email">E-mail:</label>
                <div class="controls">
                    <input type="text" name="email" placeholder="E-mail">
                </div>

            </div>


            <div class="control-group">
                <label class="control-label" for="password">Senha:</label>
                <div class="controls">
                    <input type="password" name="password" placeholder="Senha">
                </div>

            </div>


            <div class="control-group">
                <label class="control-label" for="inputAcesso">Acesso:</label>
                <div class="controls">
                    <select name="tipo">
                        <option value="professor">Professor</option>
                        <option value="aluno">Aluno</option>
                    </select>
                </div>

            </div>


            <div class="control-group">
                <div class="controls">
                    <button class="btn btn-info" id="bt_login">Entrar</button>
                </div>

            </div>


        </form>

        <div id="mensagem"></div>

    </div>
</div>

<script type="text/javascript" src="public/jquery/jquery.js"></script>
<script type="text/javascript" src="public/js/login.js"></script>
<script type="text/javascript" src="public/js/bootstrap.js"></script>
</body>

</html>