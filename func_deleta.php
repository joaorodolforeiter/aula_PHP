<?php

echo "$delsql";
include "conecta_mysql.php";

    $res = mysql_db_query("cadastro","delete from cadastro where codigo='$delsql");
    mysql_close($conexao);

    if ($res == 0)
    {
        echo ("Erro...");
    }
    else
        echo ("Cadastro deletado com SUCESSO!");

?>