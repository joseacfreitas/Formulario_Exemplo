<?php

include_once 'conetar.php';
include_once 'enviar_dados.php';

?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Formulario</title>

 <style>

form{
    position: relative;
    width: 50%;
    background-color: lightgrey;
    top: 50%;
    left: 25%;
}


 </style>   

</head>

<body>
    <form method="POST">

        <div>
            <label for="Nome">Primeiro Nome:</label>
            <input type="text" placeholder="Nome" name="Nome" required>
            <div class="valid-feedback">Valid</div>
            <div class="invalid-feedback">
                Por favor preencher o campo!
            </div>

            </br>
            <label for="Apelido">Último Nome:</label>
            <input type="text" placeholder="Último Nome" name="Apelido" required>
            <div class="valid-feedback">Valid</div>
            <div class="invalid-feedback">
                Por favor preencher o campo!
            </div>

            <label for="email">Seu Email:</label>
            <input type="email"  placeholder="Email" name="email" required>
            <div class="valid-feedback">Valid</div>
            <div class="invalid-feedback">
                Por favor preencher o campo!
            </div>

            </br>
            <label for="telefone">Contacto Telefonico:</label>
            <input type="text" placeholder="Telemovel" name="telefone" required>
            <div class="valid-feedback">Valid</div>
            <div class="invalid-feedback">
                Por favor preencher o campo!
            </div>
            </br>
            </br>
            <h2 class="text-center">Selecione o Curso a Inscrever</h2>
            </br>
            <INPUT TYPE="RADIO" NAME="curso" VALUE="HTML" />Html/Css/JavaScript
            </br>
            <INPUT TYPE="RADIO" NAME="curso" VALUE="PHP" />Php
            </br>
            <INPUT TYPE="RADIO" NAME="curso" VALUE="Java" />Java
            </br>
            <INPUT TYPE="RADIO" NAME="curso" VALUE="Python" />Python
            </br>
            <INPUT TYPE="RADIO" NAME="curso" VALUE="C#" />C#
            </br>
            <INPUT TYPE="RADIO" NAME="curso" VALUE="c/C++" />C/C++
            </br>
            <INPUT TYPE="RADIO" NAME="curso" VALUE="Ruby" />Ruby
            </br>
            <INPUT TYPE="RADIO" NAME="curso" VALUE="SnoBol" />SnoBol
            </br>
            <INPUT TYPE="RADIO" NAME="curso" VALUE="AWK" />AWK
            </br>
            <INPUT TYPE="RADIO" NAME="curso" VALUE="React" /> React
            </br>
            </br>
        </div>
        <center>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </center>
        <br>
    </form>
</body>

</html>