<?php
/**
 * @name DBUsuario
 * @desc Espelho da tabela usuário do banco
 * @since 2015-02-13
 */
class DBUsuario
{
    //Atributos 
    private $idUsuario;
    private $senha;
    private $idTipoUsuario;
    private $ativo;
    
    //Metodos getters e setter
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }
    
    public function setIdUsuario($id)
    {
        $this->idUsuario = $id;
    }
    
    public function getSenha()
    {
        return $this->senha;
    }
    
    public function setSenha($pass)
    {
        $this->senha = $pass;
    }
    
    public function getIdTipoUsuario()
    {
        return $this->idTipoUsuario();
    }
    
    public function setIdTipoUsuario($id)
    {
        $this->idTipoUsuario = $id;
    }
    
    public function getAtivo()
    {
        return $this->ativo;
    }
    
    public function setAtivo($status)
    {
        $this->ativo = $status;
    }
}

?>