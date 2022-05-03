<?php

namespace App\Sistema;

class Usuario
{
    private $nome;
    private $sobrenome;
    private $senha;

    public function __construct(string $nome, string $senha)
    {
        $nomeSobrenome = explode(" ", $nome, 2);
        
        if($nomeSobrenome[0] === ""){
            $this->nome = "Você precisa digitar seu nome!";
        }else{
            $this->nome = $nomeSobrenome[0];
        }

        if($nomeSobrenome[1] === null)
        {
            $this->sobrenome = "Você precisa digitar seu sobrenome!";
        }else{
            $this->sobrenome = $nomeSobrenome[1];
        }
        $this->senha = $senha;
    }
    public function getNome(): string
    {
        return $this->nome;
    }
    public function getSobrenome(): string
    {
        return $this->sobrenome;
    }


    private function validaSenha(string $senha): void{
        $tamanhoSenha = strlen(trim ($senha));

        if ($tamanhoSenha >= 6)
        {
            $this->senha = $senha;
        } else {
            $this->senha = "Senha invalida";
    }
}

    public function getSenha(): string
    {
        return $this->senha;
    }
}


?>