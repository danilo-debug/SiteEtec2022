<?php 
 class Curso
 {
    private $id;
    private $usuario_id;
    private $titulo;
    private $logotipo;
    private $capa;
    private $descricao;

    public function __get($atributo)
    {
        return $this->$atributo;
    }

    public function __set($atributo,$valor)
    {
        $this->$atributo = $valor;
    }
 }

?>