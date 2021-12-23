<?php

namespace Utfpr\Pratica\Entities;

class Message
{
    private string $id;
    private string $nome;
    private string $email;
    private string $mensagem;

    /**
     * @param string $nome
     * @param string $email
     * @param string $mensagem
     */
    public function __construct(string $id, string $nome, string $email, string $mensagem)
    {
        $this->setId($id);
        $this->setNome($nome);
        $this->setEmail($email);
        $this->setMensagem($mensagem);
    }


    /**
     * @param string $nome
     */
    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @param string $mensagem
     */
    public function setMensagem(string $mensagem): void
    {
        $this->mensagem = $mensagem;
    }

    /**
     * @return string
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getMensagem(): string
    {
        return $this->mensagem;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }



}