<?php

    session_start();

    // VERIFICA SE AUTENTICAÇÃO FOI REALIZADA
    $is_authenticated = false;
    $usuario_id = null;
    $usuario_group_id = null;

    // GRUPO DE USUARIOS POR PERMISSÕES
    $group_ids = array(
        1 => 'adm',
        2 => 'user'
    );

    // USUÁRIOS DO SISTEMA HARDCODED PARA TESTES
    $usuarios_app = array(
       array('id' => 1, 'email' => 'adm@teste.com', 'senha' => '123', 'group_id' => 1),
       array('id' => 2, 'email' => 'user@teste.com', 'senha' => '123', 'group_id' => 2),

    );

    foreach($usuarios_app as $user) {

        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
            $is_authenticated = true;
            $usuario_id = $user['id'];
            $usuario_group_id = $user['group_id'];
        }
    };

    if ($is_authenticated) {
        $_SESSION['authenticated'] = 'YES';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['group_id'] = $usuario_group_id;
        header('Location: home.php');
    }
    else {
        $_SESSION['authenticated'] = 'NO';
        header('Location: index.php?login=erro');
    }

?>