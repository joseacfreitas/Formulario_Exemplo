<?php

//Criaçao da ligaçao à BD.
$conetar = new mysqli("localhost", "root", "", "Cursos");

if ($conetar->connect_errno == true) { //Teste á ligaçao. 

    echo "Error conetar!";
} else {
    echo "Ligaçao obtida";
}
