<?php

class UsuariosController
{
  public function ObterUsuarios()
  {
  }
  public function CadastrarUsuarios()
  {
    $DadosUsuarios = $_POST;

    echo json_encode($DadosUsuarios);

    exit();
  }
}

$Usuario = new UsuariosController();

$Usuarios->CadastrarUsuarios();

// $phpinput = file_get_contents("php://input");

// echo json_encode($phpinput);

// exit();

// $DadosUsuarios = isset($_POST['Nome']) ? $_POST['Nome'] : null;

// header('Content-Type: application/json');
// echo json_encode($DadosUsuarios);

// exit();
