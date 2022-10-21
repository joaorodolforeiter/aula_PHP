<?php
session_start();
?>

<html>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Cadastro</title>
    
</head>
<style>
    body {
        background-color: #16161c;
        display:flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
        font-family: 'Roboto', sans-serif;

        margin: 15px;
    }
    h1{
        color: white;
    }
    label {
        color: white ;
    }
    hr {
        color: darkgreen;
    }
    
    input {
        margin: 0px 0px 8px 0px;
        border-radius: 4px;
        border: 1px solid darkgreen;
        background-color: #3c423d;
        color: white; 
    }
    input:focus {
        border: 1px solid limegreen;
    }
    
    a {
        color: darkgreen;
        text-decoration: none;
    }
    a:hover{
        color: green;
        text-decoration: none;
    }

    .input {
        width: 300px;
    }
    .form {
        padding: 15px;
    }


</style>

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
        <center>
        <div>
            <input type="submit" value="Gravar" id="Enviar">
            <input type="reset" value="Limpar" id="Limpar">
        </div>
        </center>
       
    </form>
    <br>
    <div>
        <a href="mostra_dados.php">Ver Cadastrados</a>
    </div>

</body>

</html>