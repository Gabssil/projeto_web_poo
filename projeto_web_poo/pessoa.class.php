<?php

class pessoa{

    private $nome;
    private $endereco;
    private $bairro;
    private $cep;
    private $cidade;
    private $estado;
    
    //nome
    public function getNome(){
        return $this -> nome;
    }
    public function setNome($nome){
        $this -> nome = $nome;
    }

    //endereço
    public function getEndereco(){
        return $this -> endereco;
    }
    public function setEndereco($endereco){
        $this -> endereco = $endereco;
    }

    //bairro
    public function getBairro(){
        return $this -> bairro;
    }
    public function setBairro($bairro){
        $this -> bairro = $bairro;
    }

    //cep
    public function getCep(){
        return $this -> cep;
    }
    public function setCep($cep){
        $this -> cep = $cep;
    }

    //cidade
    public function getCidade(){
        return $this -> cidade;
    }
    public function setCidade($cidade){
        $this -> cidade = $cidade;
    }

    //estado
    public function getEstado(){
        return $this -> estado;
    }
    public function setEstado($estado){
        $this -> estado = $estado;
    }

}