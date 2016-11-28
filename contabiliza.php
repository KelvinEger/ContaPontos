<?php

$link = mysqli_connect('localhost', 'root', '', 'somagrupo');

if (!$link) {
    die('Não foi possível conectar: ' . mysqli_error());
}


$quem = $_POST['valor'];

if ($quem != 10) {
    $query = "INSERT INTO somagrupo (nome, votos) values ('$quem' ,'1')"; //query
    $banco = mysqli_query($link, $query); //mete la na pora do banco
    if ($banco) {
        echo 'votou';
    }
} else {
    $query = "SELECT SUM(votos) as votos, nome FROM somagrupo GROUP BY nome"; //query
    $banco = mysqli_query($link, $query); //mete la na pora do banco
    echo "<table class='container  striped responsive-table'>
            <tr>
            <th>Nome </th>
            <th>Votos</th>
            </tr>";
    while ($rows = mysqli_fetch_assoc($banco)) {
        echo '<tr>';
        echo '<td>' . $rows["nome"] . '</td>';
        echo '<td>' . $rows["votos"] . '</td>';
        echo '</tr>';
    }
    echo '</table>';
}