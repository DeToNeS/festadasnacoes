<?php
/**
 * @name MUsuario
 * @desc Classe responsavel pela manipulação da tabela usuario do banco de dados
 * @since 2015-02-13
 */
class MUsuario extends MUse
{
    public static $instance;
    
    private function __construct()
    {
        //
    }
    
    public static function getInstance()
    {
        if (!isset(self::$instance))
        {
            self::$instance = new MUsuario();
        }
        
        return self::$instance;
    }
    
    public function Inserir(DBUsuario $usuario) 
    {
        try 
        {
            $sql = "INSERT INTO usuario 
                    (
                        idUsuario,
                        senha,
                        idTipoUsuario,
                        ativo
                    )
                    VALUES 
                    (
                        :idUsuario,
                        :senha,
                        :idTipoUsuario,
                        :ativo
                    )";
    
            $p_sql = MConexao::getInstance()->prepare($sql);
    
            $p_sql->bindValue(":idUsuario", $usuario->getIdUsuario());
            $p_sql->bindValue(":senha", $usuario->getSenha());
            $p_sql->bindValue(":idTipoUsuario", $usuario->getIdTipoUsuario());
            $p_sql->bindValue(":ativo", $usuario->getAtivo());
    
            return $p_sql->execute();

        } 
        catch (Exception $e) 
        {
            print "Ocorreu um erro ao tentar executar esta ação. Erro: Código: " . $e->getCode() . " Mensagem: " . $e->getMessage();
        }
    }
    
    public function Editar(DBUsuario $usuario) 
    {
        try 
        {
            $sql = "UPDATE usuario SET
                           senha = :senha,
                           idTipoUsuario = :idTipoUsuario,
                           ativo = :ativo
                     WHERE idUsuario = :idUsuario";
    
            $p_sql = MConexao::getInstance()->prepare($sql);
    
            $p_sql->bindValue(":senha", $usuario->getSenha());
            $p_sql->bindValue(":idTipoUsuario", $usuario->getIdTipoUsuario());
            $p_sql->bindValue(":ativo", $usuario->getAtivo());
            $p_sql->bindValue(":idUsuario", $usuario->getIdUsuario());
    
            return $p_sql->execute();
            
        } 
        catch (Exception $e) 
        {
            print "Ocorreu um erro ao tentar executar esta ação. Erro: Código: " . $e->getCode() . " Mensagem: " . $e->getMessage();
        }
    }
    
    public function Deletar($idUsuario) 
    {
        try 
        {
            $sql = "DELETE FROM usuario WHERE idUsuario = :idUsuario";
            
            $p_sql = MConexao::getInstance()->prepare($sql);
            
            $p_sql->bindValue(":idUsuario", $idUsuario);
    
            return $p_sql->execute();
            
        } 
        catch (Exception $e) 
        {
            print "Ocorreu um erro ao tentar executar esta ação. Erro: Código: " . $e->getCode() . " Mensagem: " . $e->getMessage();
        }
    }
    
    private function Popula($row) 
    {
        $db = new DBUsuario();
        
        $db->setIdUsuario($row['idUsuario']);
        
        $db->setSenha($row['senha']);
        
        $db->setIdTipoUsuario($row['idTipoUsuario']);
        //$db->setIdTipoUsuario(MUsuarioTipo::getInstance()->Busca($row['idTipoUsuario'])); --FIXME SUBSTITUIR QNDO A CLASSE MUsuarioTipo estiver pronta
                
        $db->setAtivo($row['ativo']);
        
        return $db;
    }
    
    public function Busca($idUsuario) 
    {
        try 
        {
            $sql = "SELECT * FROM usuario WHERE idUsuario = :idUsuario";
            
            $p_sql = MConexao::getInstance()->prepare($sql);
            
            $p_sql->bindValue(":idUsuario", $idUsuario);
            
            $p_sql->execute();
            
            return $this->Popula($p_sql->fetch(PDO::FETCH_ASSOC));

        } 
        catch (Exception $e) 
        {
            print "Ocorreu um erro ao tentar executar esta ação. Erro: Código: " . $e->getCode() . " Mensagem: " . $e->getMessage();
        }
    }
    
    
       
}

?>