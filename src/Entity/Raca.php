<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RacaRepository")
 */
class Raca
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**     
     * @var string
     * @ORM\Column(type="string", length=80)
     */
    private $nome; 

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Get the value of nome
     *
     * @return  string
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @param  string  $nome
     *
     * @return  self
     */ 
    public function setNome(string $nome)
    {
        $this->nome = $nome;

        return $this;
    }
}
