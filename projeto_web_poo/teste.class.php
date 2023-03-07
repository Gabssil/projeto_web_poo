<?php

require_once("pessoa.class.php");

class teste{
       private $pessoa;

       public function __construct(){
           $pessoa = new pessoa();
           //saida de dados nome
           $pessoa-> setNome($_POST['nome']. "<br>");
           echo $pessoa->getNome();

           //saida de dados endereço
           $pessoa-> setEndereco($_POST['endereco']. "<br>");
           echo $pessoa->getEndereco();

           //saida de dados bairro
           $pessoa-> setBairro($_POST['bairro']. "<br>");
           echo $pessoa->getBairro();

           //saida de dados
           $pessoa-> setCep($_POST['cep']. "<br>" );
           echo $pessoa->getCep();

           //saida de dados
           $pessoa-> setCidade($_POST['cidade'] . "<br>");
           echo $pessoa->getCidade();

           //saida de dados estado
           $pessoa-> setEstado($_POST['estado'] . "<br>");
           echo $pessoa->getEstado();
       }
}new teste();

?>
