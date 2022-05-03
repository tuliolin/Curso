<?php

namespace App\Sistema;

class Contato
{
    private $email;
    private $endereco;
    private $cep;

    public function __construct(string $email, string $endereco, string $cep, string $telefone)
    {
        $this->email = $email;
        if($this->validaEmail($email) !== false)
        {
            $this->email = $email;
        }else {
            $this->email = "Email invalido";
        }
        $this->telefone = $telefone;
        $this->endereco = $endereco;
        $this->cep = $cep;
    }
    public function getUsuario(): string
    {
        $posicaoarroba = strpos($this->email, "@");
        if($posicaoarroba === false)
        {
            return "email e usuario incorreto";
        }else{
            return substr($this->email, 0, $posicaoarroba);
        }
    }
    public function validaEmail(string $email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
    public function getEmail(): string
    {
        return $this->email;
    }
    public function getendereco(): string
    {
        return $this->endereco;
    }
    public function getCep(): string
    {
        return $this->cep;
    }
    public function getTelefone(): string
    {
        return $this->telefone;
    }

}