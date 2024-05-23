<?php

require_once 'Database.php';
require_once 'Contato.php';

class ContatoDao {
    //Criar Comunicação com o banco
    private $db;


    public function __construct (){
        $this->db = Database::getInstance()->getConnection();
    }
    
    //Criar um get all
    public function getAll(){
        try{
            $sql = "SELECT * FROM contatos_info";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            $contatos = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return array_map(function($contato){
                return new Contato($contato['id'],$contato['nome'], $contato['telefone'],$contato['email']);
            }, $contatos);


        } catch (PDOException $e){
            return [];
        }
    }

    public function create($contato){
        try{
            $sql = "INSERT INTO contatos_info (nome, telefone, email)
                VALUES (:nome, :telefone, :email)";
            $stmt = $this->db->prepare($sql);

            $nome = $contato->getNome();
            $telefone = $contato->getTelefone();
            $email = $contato->getEmail();

            $stmt->bindParm(':nome', $nome);
            $stmt->bindParm(':telefone', $telefone);
            $stmt->bindParm(':email', $email);

            $stmt->execute();

            return true;
        } catch (PDOException $e){
            return false;
        }
    }


}

?>