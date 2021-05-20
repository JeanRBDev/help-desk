<?php

    session_start();

    // MONTAGEM DO TEXTO
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    // EOL QUEBRA DE LINHA
    $texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

    // ABRINDO, ESCREVENDO TEXTO E FECHANDO
    $arquivo = fopen('chamados.hd','a');

    fwrite($arquivo, $texto);

    fclose($arquivo);

    header('Location: home.php');

?>