<?php

class Contato {
  private $id;
  private $nome;
  private $telefone;
  private $email;

  public function __construct($id, $nome, $telefone, $email) {
    $this->id = $id;
    $this->nome = $nome;
    $this->telefone = $telefone; // Corrected line
    $this->email = $email;
  }

  public function id(){
    return $this->id;
  }
  public function getNome(){
    return $this->nome;
  }
  public function getTelefone(){
    return $this->telefone;
  }
  public function getEmail(){
    return $this->email;
  }
  
}
?>
