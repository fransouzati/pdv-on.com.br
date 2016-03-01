<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pdv
 */
class Pdv
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nome;

    /**
     * @var string
     */
    private $logradouro;

    /**
     * @var string
     */
    private $maps;

    /**
     * @var string
     */
    private $isDeposito;

    /**
     * @var string
     */
    private $ativo;

    /**
     * @var \DateTime
     */
    private $dtCadastro;

    /**
     * @var \AppBundle\Entity\Empresa
     */
    private $empresa;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $compra;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->compra = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nome
     *
     * @param string $nome
     * @return Pdv
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string 
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set logradouro
     *
     * @param string $logradouro
     * @return Pdv
     */
    public function setLogradouro($logradouro)
    {
        $this->logradouro = $logradouro;

        return $this;
    }

    /**
     * Get logradouro
     *
     * @return string 
     */
    public function getLogradouro()
    {
        return $this->logradouro;
    }

    /**
     * Set maps
     *
     * @param string $maps
     * @return Pdv
     */
    public function setMaps($maps)
    {
        $this->maps = $maps;

        return $this;
    }

    /**
     * Get maps
     *
     * @return string 
     */
    public function getMaps()
    {
        return $this->maps;
    }

    /**
     * Set isDeposito
     *
     * @param string $isDeposito
     * @return Pdv
     */
    public function setIsDeposito($isDeposito)
    {
        $this->isDeposito = $isDeposito;

        return $this;
    }

    /**
     * Get isDeposito
     *
     * @return string 
     */
    public function getIsDeposito()
    {
        return $this->isDeposito;
    }

    /**
     * Set ativo
     *
     * @param string $ativo
     * @return Pdv
     */
    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;

        return $this;
    }

    /**
     * Get ativo
     *
     * @return string 
     */
    public function getAtivo()
    {
        return $this->ativo;
    }

    /**
     * Set dtCadastro
     *
     * @param \DateTime $dtCadastro
     * @return Pdv
     */
    public function setDtCadastro($dtCadastro)
    {
        $this->dtCadastro = $dtCadastro;

        return $this;
    }

    /**
     * Get dtCadastro
     *
     * @return \DateTime 
     */
    public function getDtCadastro()
    {
        return $this->dtCadastro;
    }

    /**
     * Set empresa
     *
     * @param \AppBundle\Entity\Empresa $empresa
     * @return Pdv
     */
    public function setEmpresa(\AppBundle\Entity\Empresa $empresa = null)
    {
        $this->empresa = $empresa;

        return $this;
    }

    /**
     * Get empresa
     *
     * @return \AppBundle\Entity\Empresa 
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }

    /**
     * Add compra
     *
     * @param \AppBundle\Entity\Compra $compra
     * @return Pdv
     */
    public function addCompra(\AppBundle\Entity\Compra $compra)
    {
        $this->compra[] = $compra;

        return $this;
    }

    /**
     * Remove compra
     *
     * @param \AppBundle\Entity\Compra $compra
     */
    public function removeCompra(\AppBundle\Entity\Compra $compra)
    {
        $this->compra->removeElement($compra);
    }

    /**
     * Get compra
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCompra()
    {
        return $this->compra;
    }
}
