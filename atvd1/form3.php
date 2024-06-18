<?php


    $velocidade = $_POST["velocidade"];

    $distancia = $_POST["distancia"];

    $consumo = $_POST["consumo"];
    
    $total_combustivel = ($distancia / $consumo);
    $tempoDeViagem = ($distancia / $velocidade);
    
    echo "Total horas: " .number_format($tempoDeViagem, 2, '.', ' ');  
    echo "<br>Total combustivel: " . number_format($total_combustivel, 2, '.', ' '); 


?>