<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Virtour - Login</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">    
    <style type="text/css">
        body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-signin {
            max-width: 300px;
            padding: 19px 29px 29px;
            margin: 0 auto 20px;
            background-color: #fff;
            border: 1px solid #e5e5e5;
            -webkit-border-radius: 5px;
             -moz-border-radius: 5px;
                  border-radius: 5px;
            -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
             -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                  box-shadow: 0 1px 2px rgba(0,0,0,.05);
        }
        .form-signin .form-signin-heading,
        .form-signin .checkbox {
            margin-bottom: 10px;
        }
        .form-signin input[type="text"],
        .form-signin input[type="password"] {
            font-size: 16px;
            height: auto;
            margin-bottom: 15px;
            padding: 7px 9px;
        }
    </style>  
</head>
<body>
    <div class="container">
        <form class="form-signin">
            <h2 class="form-signin-heading">Efetuar login</h2>
            <input type="text" placeholder="Endereço de email" class="input-block-level">
            <input type="password" placeholder="Senha" class="input-block-level">
            <label class="text"><a href="#">Esqueci minha senha</a></label>
            <label class="checkbox">
            <input type="checkbox" value="remember-me"> Lembrar login
            </label>
            <button type="submit" class="btn btn-large btn-primary">Entrar</button>
        </form>
    </div>
</body>
</html>