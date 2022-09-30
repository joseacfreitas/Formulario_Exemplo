<?php

include_once "conetar.php"; // Chamar fichero de coneçao.

// clicou no submit?
if ($_POST != NULL) {

    // Obtem dados inseridos pelo usuario
    $prnome = mysqli_real_escape_string($conetar, $_POST["Nome  "]);
    $ulnome = mysqli_real_escape_string($conetar, $_POST["Apelido  "]);
    $email = mysqli_real_escape_string($conetar, $_POST["email"]);
    $tele = mysqli_real_escape_string($conetar, $_POST["telefone"]);
    $cur = mysqli_real_escape_string($conetar, $_POST["curso"]);

    // criar comando SQL
    $sql = "INSERT INTO inscricoes(Nome,Apelido,email,telefone,curso  ) VALUES ('$prnome','$ulnome','$email','$tele','$cur')";

    // Executar o SQL na BD
    $retornar = $conetar->query($sql);

    if ($retornar == true) {

        echo '<script type="text/javascript"> alert("Dados enviados com sucesso!") </script> ';
    } else {
        echo '<script type="text/javascript"> alert("Erro no envio dos Dados!") </script> ';
    }
}
