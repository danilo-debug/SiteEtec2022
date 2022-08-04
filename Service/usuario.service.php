<?php 
 class UsuarioService
 {
 	private $conexao;
 	private $usuario;

 	public function __construct(Conexao $conexao, Usuario $usuario)
 	{
 		$this->conexao = $conexao->conectar();
 		$this->usuario = $usuario;
 	}

 	public function inserir() // inserir
 	{
 	 $query = "insert into tb_usuarios (nome,email,senha) values (:nome,:email,:senha)";
        $stmt = $this->conexao->prepare($query);
       
        
        $stmt->bindValue(':nome',$this->usuario->__get('nome'));
        $stmt->bindValue(':email',$this->usuario->__get('email'));
        $stmt->bindValue(':senha',$this->usuario->__get('senha'));
        $stmt->execute();
 	}

       
       public function recuperar() // ler
       {
        $query = "select id,nome,email,senha,tipo from tb_usuarios";
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        
        return $stmt->fetchALL(PDO::FETCH_OBJ);
       }
       
       public function recuperarUsuario($id)
       {
        $query = "select id,nome,email,senha,tipo from tb_usuarios where id = :id";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':id',$id);
        $stmt->execute();
        return $stmt->fetchALL(PDO::FETCH_OBJ);

       }
     
       public function alterar()
       {
        $query = "update tb_usuarios set nome = :nome, email = :email, senha = :senha where id = :id"; 
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':nome',$this->usuario->__get('nome'));
        $stmt->bindValue(':email',$this->usuario->__get('email'));
        $stmt->bindValue(':senha',$this->usuario->__get('senha'));
        $stmt->bindValue(':id',$this->usuario->__get('id'));
        $stmt->execute();
       }

       public function alterarTipo()
       {
        $query = "update tb_usuarios set nome = :nome, email = :email, senha = :senha, tipo = :tipo where id = :id";  
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':nome',$this->usuario->__get('nome'));
        $stmt->bindValue(':email',$this->usuario->__get('email'));
        $stmt->bindValue(':senha',$this->usuario->__get('senha'));
        $stmt->bindValue(':tipo',$this->usuario->__get('tipo'));
        $stmt->bindValue(':id',$this->usuario->__get('id'));
        $stmt->execute();
       }
       
       public function excluir()
       {
        $query = "delete from tb_usuarios where id = :id";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':id',$this->usuario->__get('id'));
        $stmt->execute();
       }

    
       
     
 }

?>