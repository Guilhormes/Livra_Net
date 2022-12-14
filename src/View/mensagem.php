<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensagem do sistema</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/acervo.css">
</head>

<body>
    <header>
        <a href="../../index.html"><button src="button"><img src="./img/logo atualizado.png"></button></a>
        <ul>
                <li><a href="../View/login.html">Login</a></li>
                <li><a href="../View/registro.html">Registre-se</a></li>
                <li><a href="../View/perfil.html">Perfil</a></li>
            </ul>
    </header>
    <main class="content">
        <article class="flex justify-center items-center w-full h-screen">
            <?php
            session_start();
            if (empty($_SESSION)) {
                //erro talvez estaja aqui!!!!!!!
                header("location:../../index.html");
            }
            if (!empty($_SESSION['msg_sucesso'])) :
            ?>
                <article class="w-2/4 bg-green-700 text-white flex flex-col items-center">
                    <p class="p-4">
                        <?= $_SESSION['msg_sucesso'] ?>
                    </p>
                    <a href="#" onclick="window.history.back()">Voltar</a>
                </article>
            <?php
            endif;
            unset($_SESSION['msg_successo']);
            ?>
            <?php
            if (!empty($_SESSION['msg_erro'])) :
            ?>
                <article class="w-2/4 bg-red-700 text-white flex flex-col items-center">
                    <p class="p-4">
                        <?= $_SESSION['msg_erro'] ?>
                    </p>
                    <a href="#" onclick="window.history.back()">Voltar</a>
                </article>
            <?php
            endif;
            unset($_SESSION['msg_erro']);
            ?>
            <?php
            if (!empty($_SESSION['msg_atencao'])) :
            ?>
                <article class="w-2/4 bg-orange-700 text-white">
                    <ul class="p-4">
                        <?= $_SESSION['msg_atencao'] ?>
                    </ul>
                    <a href="#" onclick="window.history.back()">Voltar</a>
                </article>
            <?php
            endif;
            unset($_SESSION['msg_atencao'])
            ?>
    </main>
    </div>
</body>

</html>