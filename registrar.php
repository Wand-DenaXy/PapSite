<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registrar.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Register</title>
</head>
<body>
    <div class="wrapper">
        <form action="" method="post">
            <h1>Registe-se</h1>
            <div class="input-box">
                <input type="text" name="username" id="username" placeholder="Username" required>
                <img width="15px" height="15px" class="iconUser" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAURJREFUSEvF1L8rRXEYx/HXTWaEwSiZLIpVRgulKBaLzWLwa7QopURS/gRZ5FcW/wAlGWQiIykMKKX8OKdc3c69557bOW6+2znn+3zen+fp85ycKp9clfVVCujFIjp+DF1gDsdJBisBjGKTIjOfGMRBOUgSoB43aIgRuUMb3uIgSYDQ4U7CGPpwlBYwjeUEwBRW0wIGsJ8A6MdhWkAdrtEUI3CPdrykBYR1I9gqIRCmaAi7WVKUr+3B0s8efOASszj5iz1I0ij7PSmmmcTD4nKAZswEm9oVzLkTjRHaI85xihU8lHITBxgLBNeDfIcpquQ8YRx70culAJPBr2GtEtUSd4axXfg+CmjFFWpSAl4RavyOKwrYwERK8XzZfGBwIf8QBdyiJSPgDN1xgHfUZgQ8F4Yj2sFXRvEi4/+6aH/STNU7+AYkwS0ZwQsJ3gAAAABJRU5ErkJggg=="/>
            </div>
            <div class="input-box">
                <input type="text" name="Email" id="Email" placeholder="Email" required>
                <img width="15px" height="15px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAASZJREFUSEvt1cErBHEUwPHP3jlQSspNKf4JRzlLDlKKIgfl7LjlphxEUUoOkrMc/ROUs5JSHLizTzOaxuzOrmkum3f8zXvv+953pt801ByNmvvrL8A8mpisqO0BO7iKPllFd5iq2Dwtv8d0HvCZPD3Exh9B2drv4bMbpIA4m8UpRrsEPWMFN8j2KQQM4gNDLcARFkogl1jHGwbwnuS33eARy7hNEhdxgOEc6BWbuEjOZ3CG8TJA2ucE28lEoSqUhbqIUBFKQk1svIfV3ABtN8jmPWEN18lhqIgIdRFzOMZYgcauAGndecvxFkJLROjax1KH99MTIPq8ZDSEvpGSl98zoMsv9iftH1Bq7Jei2i+7uK53MVE6W+eEttd1xb7F5f31y6xF0RedUDYZkAb/FgAAAABJRU5ErkJggg=="/>
            </div>
            <div class="input-box">
                <input type="password" name="pass" id="pass" placeholder="Password" required>
                <img width="15px" height="15px" class="icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAPtJREFUSEvt1TFKQ0EQxvFfvIKkEEEQC229go12NuIdhFTBJtgoplBSWOkdrOwEBa9gkcYuKIRU4g1EDWzAPN7L5L0Q0mSrYWf2++9+zO7WzHnU5qxvWsARTrCXNvSCWzxEG5wG0MFpgdA5LiZBIsAx7pPAJe5S3MBZivfxXASJAK/YRRM3GZEhoI0nHFQFfGPlz+86PjMiaxjgC6tVAT9pYdFJo3zYRZFAlF8M4BBX2Il6PJN/S+38+H8+z9s+1kuKj8p72IoAI18rMsZtzzvBEjDmytKivE5bvEUf2Kh4Cd6xGV204VNxje2SkC5aCJ+KkrqTy6MfbWbYL7s+KRl1wSMtAAAAAElFTkSuQmCC"/>
                <box-icon type='solid' name='lock-alt' class="iconPass"></box-icon>  
            </div>
            <div class="input-box">
                <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Repetir a Password" required>
                <img width="15px" height="15px" class="icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAPtJREFUSEvt1TFKQ0EQxvFfvIKkEEEQC229go12NuIdhFTBJtgoplBSWOkdrOwEBa9gkcYuKIRU4g1EDWzAPN7L5L0Q0mSrYWf2++9+zO7WzHnU5qxvWsARTrCXNvSCWzxEG5wG0MFpgdA5LiZBIsAx7pPAJe5S3MBZivfxXASJAK/YRRM3GZEhoI0nHFQFfGPlz+86PjMiaxjgC6tVAT9pYdFJo3zYRZFAlF8M4BBX2Il6PJN/S+38+H8+z9s+1kuKj8p72IoAI18rMsZtzzvBEjDmytKivE5bvEUf2Kh4Cd6xGV204VNxje2SkC5aCJ+KkrqTy6MfbWbYL7s+KRl1wSMtAAAAAElFTkSuQmCC"/>
                <box-icon type='solid' name='lock-alt' class="iconPass"></box-icon>  
            </div>
            <div class="conta-eliminar">
                <a class="back" href="login1.php">Voltar</a>
            </div>
            <button type="submit" name="submit" class="btn">Registrar</button>
            <?php
    require "connect.php";
    if(isset($_POST["submit"]))
    {
        $username=$_POST["username"];
        $email=$_POST["Email"];
        $pass=$_POST["pass"];
        $confirmPassword=$_POST["confirmPassword"];
        
        $erros = array();
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            array_push($erros,"O Email não é valido");
        }
        if (strlen($pass)<8)
        {
            array_push($erros,"Sua palavra pass deve conter mais do 8 caracteres");
        }
        if ($pass !== $confirmPassword)
        {
            array_push($erros,"As palavras pass nao condizem");
        }
        $sqlb = mysqli_query($con,"SELECT * FROM registrar WHERE username = '$username'");
        if (mysqli_num_rows($sqlb) != 0)
        {
            array_push($erros,"Ja existe um username");
        }
        $sql = mysqli_query($con,"SELECT * FROM registrar WHERE email = '$email'");
        if (mysqli_num_rows($sql) != 0)
        {
            array_push($erros,"Ja existe um email");
        }
        if (count($erros)>0)
        {
            foreach($erros as $error)
            {
                echo "<div class='erro'>$error</div>";
            }
        }
        else
        {     
                // $sqli = "INSERT INTO registrar VALUES (NULL, '$username', '$email', '$pass');";
                // if ($con->query($sqli)===true)
                //     echo "<div class='sucesso'>'Registo feito com sucesso!'</div>";
                // else
                //     echo "<div class='erro'>'Registo feito com sucesso!'</div>";;
                
        }
    }
    ?>
        </form>
    </div>
</body>
</html>
