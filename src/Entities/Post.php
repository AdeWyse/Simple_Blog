<?php

namespace Utfpr\Pratica\Entities;

class Post
{
    private int $id;
    private string $titulo;
    private string $preview;
    private string $textoBase;

    private array $textoConvertido;

    /**
     * @param string $titulo
     * @param string $preview
     * @param string $texto
     */
    public function __construct(int $id, string $titulo, string $preview, string $texto)
    {
        $this->setId($id);
        $this->setTitulo($titulo);
        $this->setPreview($preview);
        $this->setTextoBase($texto);
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @param string $titulo
     */
    public function setTitulo(string $titulo): void
    {
        $this->titulo = $titulo;
    }

    /**
     * @param string $preview
     */
    public function setPreview(string $preview): void
    {
        $this->preview = $preview;
    }

    /**
     * @param string $textoBase
     */
    public function setTextoBase(string $textoBase): void
    {
        $this->setTextoConvertido($textoBase);
        $this->textoBase = $textoBase;
    }

    public function setTextoConvertido(string $textoBase): void
    {
        $this->textoConvertido = $this->createParagraphs($textoBase);
    }


    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitulo(): string
    {
        return $this->titulo;
    }

    /**
     * @return string
     */
    public function getPreview(): string
    {
        return $this->preview;
    }

    /**
     * @return string
     */
    public function getTextoBase(): string
    {
        return $this->textoBase;
    }

    /**
     * @return array
     */
    public function getTextoConvertido(): array
    {
        return $this->textoConvertido;
    }
    /**
     * @return array
     */
    public function createParagraphs(string $entrada): array{
        $resultado = preg_split("/\r\n|\n|\r/", $entrada);
        return $resultado;
    }

}