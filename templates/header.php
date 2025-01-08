<?php
include_once "config/url.php";
include_once "config/process.php";

// limpa a mesagem

if (isset($_SESSION['msg'])) {
    $printMsg = $_SESSION['msg'];
    $_SESSION['msg'] = '';
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Contatos</title>
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" />
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <!-- CSS -->

    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/style.css">
</head>

<body >
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">


        <div class="collapse navbar-collapse" id="img">
            <a href="<?= $BASE_URL ?>index.php">
                <img src="<?= $BASE_URL ?>/img/cci.png" alt="Agenda">
            </a>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link text-light" href="<?= $BASE_URL ?>index.php">Agenda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="<?= $BASE_URL ?>create.php">Adicionar contato</a>
                </li>

            </ul>

        </div>
    </nav>