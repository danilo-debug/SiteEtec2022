<?php 
 class CursoService
 {
 	private $conexao;
 	private $curso;

 	public function __construct(Conexao $conexao, Curso $curso)
 	{
 		$this->conexao = $conexao->conectar();
 		$this->curso = $curso;
 	}

 	public function inserir() // inserir
 	{
 	 $query = "insert into tb_cursos (titulo,logotipo,capa,descricao) values (:titulo,:logotipo,:capa,:descricao)";
        $stmt = $this->conexao->prepare($query);
       
        $stmt->bindValue(':titulo',$this->curso->__get('titulo'));
        $stmt->bindValue(':logotipo',$this->curso->__get('logotipo'));
        $stmt->bindValue(':capa',$this->curso->__get('capa'));
        $stmt->bindValue(':descricao',$this->curso->__get('descricao'));
        
        if($stmt->execute())
        {
              $diretorio = "imagem/";
              move_uploaded_file($_FILES['logotipo']['tmp_name'],
              $diretorio.$this->curso->__get('logotipo'));
              move_uploaded_file($_FILES['capa']['tmp_name'],
              $diretorio.$this->curso->__get('capa'));
        }
 	}

      
       public function recuperar() // ler
       {
        $query = "select id,usuario_id,titulo,logotipo,capa,descricao from tb_cursos";
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        
        return $stmt->fetchALL(PDO::FETCH_OBJ);
       }
       
      
       public function recuperarCurso($id)
       {
        $query = "select id,usuario_id,titulo,logotipo,capa,descricao from tb_cursos where id = :id";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':id',$id);
        $stmt->execute();
        return $stmt->fetchALL(PDO::FETCH_OBJ);

       }

     
       public function alterar()
       {
        $query = "update tb_cursos set titulo = :titulo, logotipo = :logotipo, capa = :capa, descricao = :descricao where id = :id"; 
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':titulo',$this->curso->__get('titulo'));
        $stmt->bindValue(':logotipo',$this->curso->__get('logotipo'));
        $stmt->bindValue(':capa',$this->curso->__get('capa'));
        $stmt->bindValue(':descricao',$this->curso->__get('descricao'));
        $stmt->bindValue(':id',$this->curso->__get('id'));
        
        if($stmt->execute())
        {
          if($_SESSION['logotipo']!=$this->curso->__get('logotipo'))
          {
            unlink('imagem\\'.$_SESSION['logotipo']);
          }
          if($_SESSION['capa']!=$this->curso->__get('capa'))
          {
            unlink('imagem\\'.$_SESSION['capa']);
          }

          $diretorio = 'imagem/';
          move_uploaded_file($_FILES['logotipo']['tmp_name'], $diretorio.$this->curso->__get('logotipo'));
          move_uploaded_file($_FILES['capa']['tmp_name'], $diretorio.$this->curso->__get('capa'));

        }
       }
   

       public function excluir()
       {
        $query = "delete from tb_cursos where id = :id";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':id',$this->curso->__get('id'));
        if($stmt->execute())
        {
          @unlink('imagem\\'.$_SESSION['logotipo']);
          @unlink('imagem\\'.$_SESSION['capa']);
        }
       }

    
       
     
 }

?>