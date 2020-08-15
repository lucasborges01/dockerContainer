<h1>Usuarios<h1>
<?php  

$pdo = new PDO("mysql:dbname=meudb;host=db", "user", "1234");
$sql = $pdo->query("SELECT * FROM Usuarios");

if($sql->rowCount() > 0){
    $usuarios = $sql->fetchAll();

    echo "<ul>";
    foreach($usuarios as $usuario){
        echo "<li>".$usuario['Nome']."</li>";
    }
    echo "<ul>";
}else{
    echo "Não há usuários cadastrados";
}


?>