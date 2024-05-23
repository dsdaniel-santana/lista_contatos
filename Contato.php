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
  public function nome(){
    return $this->nome;
  }
  public function telefone(){
    return $this->telefone;
  }
  public function email(){
    return $this->email;
  }
  
}
?>
