<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, cyan, yellow);
            text-align: center;
            color: white;
        }

        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 80px;
            border-radius: 15px;
            color: white;
        }
        /* caixa de input */
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }

        /* botão enviar */
        .inputSubmit{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
        }
        .inputSubmit:hover{
            background-color: deepskyblue;
            cursor: pointer;
        }


        
    </style>

</head>

<body>

    <a href="home.php">Voltar</a>
    
    <div class="box">
        <h1>Login</h1>

        <form action="testlogin.php" method="POST">
            <input type="text" name="email" placeholder="e-mail">
            <br><br>
            <input type="password" name="senha" placeholder="senha">
            <br><br>
            <input type="submit" class="inputSubmit" name="submit" value="Enviar">
        </form>

    </div>
    
</body>

</html>
