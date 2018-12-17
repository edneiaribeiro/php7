<?php 

require_once ("config.php");

/*
$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios); */

/*
//Carrega um usuario
$root = new Usuario();

$root->loadById(1);

echo $root;
*/

/*
//Carrega uma Lista de usuarios

$lista = Usuario::getList();

echo json_encode($lista, JSON_UNESCAPED_SLASHES);
*/

/*
//Carrega uma lista d eusuarios buscando pelo login
$search = Usuario::search("silva");

echo json_encode($search);
*/

/*
//Carrega um usuario usando o login e a senha
$usuario = new Usuario();
$usuario->login("edneiaribeiro", "programadorahermione1");

echo $usuario;
*/

$aluno = new Usuario("Aluno2", "A@2");

//$aluno->setDeslogin("aluno");
//$aluno->setDessenha("@alun0");

$aluno->insert();

echo $aluno;
?>