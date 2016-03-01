<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pacote
 */
class Pacote
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
     * @var \DateTime
     */
    private $dtInicio;

    /**
     * @var \DateTime
     */
    private $dtFim;

    /**
     * @var float
     */
    private $preco;

    /**
     * @var integer
     */
    private $qtdPdv;

    /**
     * @var integer
     */
    private $qtdUsuario;

    /**
     * @var integer
     */
    private $qtdVigencia;

    /**
     * @var string
     */
    private $ativo;

    /**
     * @var \DateTime
     */
    private $dtCadastro;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $empresa;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->empresa = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Pacote
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
     * Set dtInicio
     *
     * @param \DateTime $dtInicio
     * @return Pacote
     */
    public function setDtInicio($dtInicio)
    {
        $this->dtInicio = $dtInicio;

        return $this;
    }

    /**
     * Get dtInicio
     *
     * @return \DateTime 
     */
    public function getDtInicio()
    {
        return $this->dtInicio;
    }

    /**
     * Set dtFim
     *
     * @param \DateTime $dtFim
     * @return Pacote
     */
    public function setDtFim($dtFim)
    {
        $this->dtFim = $dtFim;

        return $this;
    }

    /**
     * Get dtFim
     *
     * @return \DateTime 
     */
    public function getDtFim()
    {
        return $this->dtFim;
    }

    /**
     * Set preco
     *
     * @param float $preco
     * @return Pacote
     */
    public function setPreco($preco)
    {
        $this->preco = $preco;

        return $this;
    }

    /**
     * Get preco
     *
     * @return float 
     */
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * Set qtdPdv
     *
     * @param integer $qtdPdv
     * @return Pacote
     */
    public function setQtdPdv($qtdPdv)
    {
        $this->qtdPdv = $qtdPdv;

        return $this;
    }

    /**
     * Get qtdPdv
     *
     * @return integer 
     */
    public function getQtdPdv()
    {
        return $this->qtdPdv;
    }

    /**
     * Set qtdUsuario
     *
     * @param integer $qtdUsuario
     * @return Pacote
     */
    public function setQtdUsuario($qtdUsuario)
    {
        $this->qtdUsuario = $qtdUsuario;

        return $this;
    }

    /**
     * Get qtdUsuario
     *
     * @return integer 
     */
    public function getQtdUsuario()
    {
        return $this->qtdUsuario;
    }

    /**
     * Set qtdVigencia
     *
     * @param integer $qtdVigencia
     * @return Pacote
     */
    public function setQtdVigencia($qtdVigencia)
    {
        $this->qtdVigencia = $qtdVigencia;

        return $this;
    }

    /**
     * Get qtdVigencia
     *
     * @return integer 
     */
    public function getQtdVigencia()
    {
        return $this->qtdVigencia;
    }

    /**
     * Set ativo
     *
     * @param string $ativo
     * @return Pacote
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
     * @return Pacote
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
     * Add empresa
     *
     * @param \AppBundle\Entity\Empresa $empresa
     * @return Pacote
     */
    public function addEmpresa(\AppBundle\Entity\Empresa $empresa)
    {
        $this->empresa[] = $empresa;

        return $this;
    }

    /**
     * Remove empresa
     *
     * @param \AppBundle\Entity\Empresa $empresa
     */
    public function removeEmpresa(\AppBundle\Entity\Empresa $empresa)
    {
        $this->empresa->removeElement($empresa);
    }

    /**
     * Get empresa
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }
}
