<?php

include('protect.php');

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
    <link rel="stylesheet" href="style/stylepainel.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    
    <div class="container">
        <div class="dashboard-container">
            <h2>Dashboard</h2>
            <div class="user-info">
                <img src="imgs/avatar.png" alt="User Avatar">
                <span>Nome do Usuário</span>
            </div>
            <p>Bem-vindo à sua página pós login! Aqui você pode visualizar e gerenciar suas informações.</p>
            
            <div class="container">
                <div class="dashboard-container">
                <a href="logout.php" class="btn btn-primary">Sair</a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>