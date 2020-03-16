<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EnderecoRepository")
 */
class Endereco
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
    private $rua; 

    /**
     * @var string
     * @ORM\Column(type="string", length=5)
     */
    private $numero; 

    /**
     * @var string
     * @ORM\Column(type="string", length=100)
     */
    private $bairro; 
    

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Get the value of rua
     *
     * @return  string
     */ 
    public function getRua()
    {
        return $this->rua;
    }

    /**
     * Set the value of rua
     *
     * @param  string  $rua
     *
     * @return  self
     */ 
    public function setRua(string $rua)
    {
        $this->rua = $rua;

        return $this;
    }

    /**
     * Get the value of numero
     *
     * @return  string
     */ 
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     *
     * @param  string  $numero
     *
     * @return  self
     */ 
    public function setNumero(string $numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of bairro
     *
     * @return  string
     */ 
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * Set the value of bairro
     *
     * @param  string  $bairro
     *
     * @return  self
     */ 
    public function setBairro(string $bairro)
    {
        $this->bairro = $bairro;

        return $this;
    }
}
