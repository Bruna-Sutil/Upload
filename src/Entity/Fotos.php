<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FotosRepository")
 */
class Fotos
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $nome;

    /**
     * @ORM\Column(type="string")
     */
    private $conteudo;

    /**
     * @ORM\Column(type="decimal")
     */
    private $tamanho;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getConteudo()
    {
        return $this->conteudo;
    }
}
