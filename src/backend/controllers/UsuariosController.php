<?php

require_once "../models/UsuariosModel.php";

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

$Usuario->CadastrarUsuarios();