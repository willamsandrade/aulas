<?php
date_default_timezone_set('America/Sao_Paulo');
$dataCompleta = date('d/m/Y H:i:s');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body {
            font-family: monospace;
            height: 100vh;
            width: 100vw;
            background-color: #262626;
        }
        .container {
            align-items: center;
            display: flex;
            justify-content: center;
            flex-direction: column;
            height: 100vh;
            width: 100vw;
        }
        h1{
            background: linear-gradient(
                to right, 
                #1859d3, 
                #0091fc, 
                #00bbd9, 
                #00da84, 
                #a8eb12
            );
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
            text-align: center;
            font-size: 100px;
        }
        a{
            text-decoration: none;
            color: white;
            font-size: large;
        }
        a:hover{
            color: blueviolet;
        }
        p{
            color: #ffffff;
            font-size: 25px;
        }
        strong{
            color: #FF0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div>
            <p><strong>Data Completa:</strong> <?php echo $dataCompleta; ?></p>
        </div>
        <br>
        <br>
        <br>
        <a href="../../index.html">Voltar</a>
    </div>
</body>
</html>