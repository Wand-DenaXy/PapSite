<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login2.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Login</title>
</head>
<body>
    <div class="wrapper">
        <form action="login1.php" method="post">
            <h1>Login</h1>
            <div class="input-box">
                <input type="email" name="Email" id="Email" placeholder="Email" required>
                <img width="15px" height="15px" class="iconUser" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAURJREFUSEvF1L8rRXEYx/HXTWaEwSiZLIpVRgulKBaLzWLwa7QopURS/gRZ5FcW/wAlGWQiIykMKKX8OKdc3c69557bOW6+2znn+3zen+fp85ycKp9clfVVCujFIjp+DF1gDsdJBisBjGKTIjOfGMRBOUgSoB43aIgRuUMb3uIgSYDQ4U7CGPpwlBYwjeUEwBRW0wIGsJ8A6MdhWkAdrtEUI3CPdrykBYR1I9gqIRCmaAi7WVKUr+3B0s8efOASszj5iz1I0ij7PSmmmcTD4nKAZswEm9oVzLkTjRHaI85xihU8lHITBxgLBNeDfIcpquQ8YRx70culAJPBr2GtEtUSd4axXfg+CmjFFWpSAl4RavyOKwrYwERK8XzZfGBwIf8QBdyiJSPgDN1xgHfUZgQ8F4Yj2sFXRvEi4/+6aH/STNU7+AYkwS0ZwQsJ3gAAAABJRU5ErkJggg=="/>
            </div>
            <div class="input-box">
                <input type="password" name="password" id="password" placeholder="Password" required>
                <img width="15px" height="15px" class="icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAPtJREFUSEvt1TFKQ0EQxvFfvIKkEEEQC229go12NuIdhFTBJtgoplBSWOkdrOwEBa9gkcYuKIRU4g1EDWzAPN7L5L0Q0mSrYWf2++9+zO7WzHnU5qxvWsARTrCXNvSCWzxEG5wG0MFpgdA5LiZBIsAx7pPAJe5S3MBZivfxXASJAK/YRRM3GZEhoI0nHFQFfGPlz+86PjMiaxjgC6tVAT9pYdFJo3zYRZFAlF8M4BBX2Il6PJN/S+38+H8+z9s+1kuKj8p72IoAI18rMsZtzzvBEjDmytKivE5bvEUf2Kh4Cd6xGV204VNxje2SkC5aCJ+KkrqTy6MfbWbYL7s+KRl1wSMtAAAAAElFTkSuQmCC"/>
                <box-icon type='solid' name='lock-alt' class="iconPass"></box-icon>  
            </div>
            <div class="conta-eliminar">
                <a href="eliminar.php">Sair conta?</a>
                <a class="back" href="index.php">Voltar</a>
            </div>
            <button type="submit" class="btn" name="submit" value="Login">Login</button>
            <div class="register-link">
                <p>Não tem conta? <a href="registrar.php">Registrar</a></p>
            </div>
        </form>
        <?php
            if (isset($_POST["submit"])) {
                $email = $_POST["Email"];
                $password = $_POST["password"];
                include ("connect.php");
                $result = mysqli_query($con,"SELECT * FROM registrar WHERE email = '$email' AND password = '$password'");
                $row = mysqli_fetch_assoc($result);
                if (mysqli_num_rows($result) > 0)
                {
                    $_SESSION["user_id"] = $row["user_id"];
                    header("Location: index.php");
                }
                else
                    echo "<div class='erro'>Palavra-chave invalida ou email invalida</div>";
            }
        ?>
    </div>
</body>
</html>
