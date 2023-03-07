<?php

require_once("pessoa.class.php");

class teste{
       private $pessoa;

       public function __construct(){
           $pessoa = new pessoa();
           //nome
           $pessoa-> setNome($_POST['nome']. "<br>");
           echo $pessoa->getNome();

           //endereço
           $pessoa-> setEndereco($_POST['endereco']. "<br>");
           echo $pessoa->getEndereco();

           //bairro
           $pessoa-> setBairro($_POST['bairro']. "<br>");
           echo $pessoa->getBairro();

           //cep
           $pessoa-> setCep($_POST['cep']. "<br>" );
           echo $pessoa->getCep();

           //cidade
           $pessoa-> setCidade($_POST['cidade'] . "<br>");
           echo $pessoa->getCidade();

           //estado
           $pessoa-> setEstado($_POST['estado'] . "<br>");
           echo $pessoa->getEstado();
       }
}new teste();

?>