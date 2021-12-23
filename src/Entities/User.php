<?php

namespace Utfpr\Pratica\Entities;

class User
{
    private string $nome;
    private string $senha;

    /**
     * @param string $nome
     * @param string $senha
     */
    public function __construct(string $nome, string $senha)
    {
        $this->setNome($nome);
        $this->setSenha($senha);
    }

    /**
     * @return string
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * @param string $nome
     */
    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    /**
     * @param string $senha
     */
    public function setSenha(string $senha): void
    {
        if(str_starts_with($senha, '$argon2i$v=')){
            $this->senha = $senha;
        }else {
            $senhaFinal = password_hash($senha, PASSWORD_ARGON2I);
            $this->senha = $senhaFinal;
        }

    }

    public function checkSenha(string $entrada): bool{
        return password_verify($entrada, $this->senha);
    }
}