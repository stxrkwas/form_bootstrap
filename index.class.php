<?php

//Nome
class Form{

    //Criando atributos com visibilidade privada
    private $nome;
    private $telefone;
    private $origem;
    private $datacont;
    private $obs;

    //Iniciando GETTERS e SETTERS para a entrada e saída dos valores
    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    public function getOrigem(){
        return $this->origem;
    }

    public function setOrigem($origem){
        $this->origem = $origem;
    }

    public function getDatacont(){
        return $this->datacont;
    }

    public function setDatacont($datacont){
        $this->datacont = $datacont;
    }

    public function getObs(){
        return $this->obs;
    }

    public function setObs($obs){
        $this->obs = $obs;
    }
    
}//Finalizando classe Form

?>