<?php
session_start();
?>

<html>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Cadastro</title>
    <link rel="stylesheet" href="styles.css">    
</head>


<body>
    <div>
    <h1>Formulário de Cadastro - PHP</h1>
    <hr>
    </div>

<?php
if(isset($_SESSION['msg'])) {
   echo $_SESSION['msg'];
   unset ($_SESSION['msg']);
   }
?>
    <form class="form" name="form1" method="post" action="func_cadastra.php">
        <div>
            <label for="nome">Nome: </label><br>
            <input class="input" type="text" name="nome" placeholder="Digite o nome completo" id="nome"><br>
            <label for="email">Email: </label><br>
            <input class="input" type="email" name="email" placeholder="Digite o seu email" id="email"><br>
            <label for="estado">Status: </label><br>
            <input class="input" type="text" name="estado" placeholder="Informe o seu Status" id="estado"><br>
        </div>
        <div>
            <input type="submit" value="Gravar" id="Enviar">
            <input type="reset" value="Limpar" id="Limpar">
        </div>
    </form>
    <div>
        <a href="mostra_dados.php">Ver Cadastrados</a>
    </div>

</body>

</html>