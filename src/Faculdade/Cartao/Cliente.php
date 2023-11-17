<?php
declare(strict_types=1);

namespace Daniel\CursoPooPhp\Faculdade\Cartao;

class Cliente
{
   private string $nome;
   private string $email;
   private string $endereco;
   private string $telefone;

   public function __construct(
        string $nome,
        string $email,
        string $endereco,
        string $telefone
   )
   {
      $this->setNome($nome);
      $this->setEmail($email);
      $this->setEndereco($endereco);
      $this->setTelefone($telefone);
   }

   public function getNome()
   {
      return $this->nome;
   }

   public function setNome($nome)
   {
      $this->nome = $nome;
   }

   public function getEmail()
   {
      return $this->email;
   }

   public function setEmail($email)
   {
      $this->email = $email;

   }

   public function getEndereco()
   {
      return $this->endereco;
   }

   public function setEndereco($endereco)
   {
      $this->endereco = $endereco;
   }

   public function getTelefone()
   {
      return $this->telefone;
   }

   public function setTelefone($telefone)
   {
      $this->telefone = $telefone;

   }
}   