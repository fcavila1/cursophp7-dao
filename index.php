<?php 

require_once("config.php");

/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/

//Carrega um usuario pelo id passado
//$user = new Usuario();
//$user->loadById(13);

//Carrega uma lista de usuarios
//$users = Usuario::getList();
//echo json_encode($users);

//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::Search("roo");
//echo json_encode($search);

//Carrega um usuario  usando login e senha
$user = new Usuario();
$user->login("root", "samsung");

echo $user;

?>