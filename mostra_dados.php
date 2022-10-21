<style>
body{
    background-color: #16161c; 
    font-size: 18;
    margin: 10px;
    padding: 10px;
    display: flex;
    flex-direction: column;
}
.card{
    color: white;
    border: 1px solid darkgreen;
    border-radius: 4px;
    padding: 10px;
    margin: 10px 0;
    background-color: #15181c;
}
a {
    color:limegreen;
}

</style>
<body>

<?php

$conn = new mysqli("localhost", "root", "", "escola");
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM aluno";
$result = $conn->query($sql);



if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc()) {
    echo
        
    "<div class='card'>
        Nome: ". $row["nome"]. "<br>
        Email: ". $row["email"]. "<br>
        Status: " . $row["estado"].
    "</div>"
    ;

    }
} else 
{
    echo "0 results";
}

$conn->close();

?>
<br>
<a href=javascript:window.history.go(-1)>Voltar</a>
</body>