<?php

$dados = [
     "Nome" => "Thiago",
     "Sobrenome" => "Sacchett",
     "Idade" => 36,
     "Endereço" => [
          "Rua" => "Ezílio Michelin",
          "Número" => "115",
          "Complemento" => "apto 507",
          "Bairro" => "Humaitá",
          "CEP" => "95705-050",
          "Cidade" => "Bento Gonçalves",
     ]
];

$dia = 30; // tipo de número inteiro
$salario = 30.25; // tipo de número real (real, float, double, longFloat, )

// var_dump($dados);

echo json_encode($dados);

class pessoa {
     public $Nome = "";
     public $Sobrenome = "";
     public $Idade = "";
     private $Endereco = "Teste";

     function MostrarSalario () {
          echo $this.$Endereco;
     }
}

$xyz