<?php 
 class Conexao
 {
    //Encaminha o dsn do banco de dados
    private $dsn = "mysql:host=localhost;dbname=db_etec2022";
    private $user = 'root';
    private $pass = '';

    //Função para fazer a conexao;
    public function conectar()
    {
        try 
        {
            $conexao = new PDO($this->dsn,$this->user,$this->pass);
            return $conexao;
        
        } 

        catch(PDOException $e) 
        {
            echo "Infelizmente ocorreu um ERRO:".$e->getMessage();
        }
    }
 }

?>