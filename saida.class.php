<?php
//Importação
require_once("index.class.php");

//Nome da classe
class Saida{
    //Objeto pessoa com visibilidade privada
    private $info;
    
    //Iniciando o método construtor
    public function __construct(){
        //Objeto pessoa que recebe a classe Pessoa()
        $info = new Form();

        //O método getNome recebe um valor
        $info->setNome($_POST['nome'] . "<br>");
        //Imprimir o valor recebido pelo método getNome
        echo $info->getNome();

        //O método getTelefone recebe um valor
        $info->setTelefone($_POST['telefone'] . "<br>");
        //Imprimir o valor recebido pelo método getTelefone
        echo $info->getTelefone();
        
        //O método getOrigem recebe um valor
        $info->setOrigem($_POST['origem'] . "<br>");
        //Imprimir o valor recebido pelo método getOrigem
        echo $info->getOrigem();
        
        //O método getDatacont recebe um valor
        $info->setDatacont($_POST['datacont'] . "<br>");
        //Imprimir o valor recebido pelo método getDatacont
        echo $info->getDatacont();
        
        //O método getObs recebe um valor
        $info->setObs($_POST['obs'] . "<br>");
        //Imprimir o valor recebido pelo método getObs
        echo $info->getObs();


    }//Finalizando o método construtor

}new Saida();

?>