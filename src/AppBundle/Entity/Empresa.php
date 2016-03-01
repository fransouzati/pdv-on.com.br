<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Empresa
 */
class Empresa
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $razaoSocial;

    /**
     * @var string
     */
    private $fantasia;

    /**
     * @var string
     */
    private $cnpj;

    /**
     * @var string
     */
    private $ativo;

    /**
     * @var string
     */
    private $cpf;

    /**
     * @var \DateTime
     */
    private $dtCadastro;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $pacote;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $fosUser;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->pacote = new \Doctrine\Common\Collections\ArrayCollection();
        $this->fosUser = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set razaoSocial
     *
     * @param string $razaoSocial
     * @return Empresa
     */
    public function setRazaoSocial($razaoSocial)
    {
        $this->razaoSocial = $razaoSocial;

        return $this;
    }

    /**
     * Get razaoSocial
     *
     * @return string 
     */
    public function getRazaoSocial()
    {
        return $this->razaoSocial;
    }

    /**
     * Set fantasia
     *
     * @param string $fantasia
     * @return Empresa
     */
    public function setFantasia($fantasia)
    {
        $this->fantasia = $fantasia;

        return $this;
    }

    /**
     * Get fantasia
     *
     * @return string 
     */
    public function getFantasia()
    {
        return $this->fantasia;
    }

    /**
     * Set cnpj
     *
     * @param string $cnpj
     * @return Empresa
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;

        return $this;
    }

    /**
     * Get cnpj
     *
     * @return string 
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * Set ativo
     *
     * @param string $ativo
     * @return Empresa
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
     * Set cpf
     *
     * @param string $cpf
     * @return Empresa
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * Get cpf
     *
     * @return string 
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set dtCadastro
     *
     * @param \DateTime $dtCadastro
     * @return Empresa
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
     * Add pacote
     *
     * @param \AppBundle\Entity\Pacote $pacote
     * @return Empresa
     */
    public function addPacote(\AppBundle\Entity\Pacote $pacote)
    {
        $this->pacote[] = $pacote;

        return $this;
    }

    /**
     * Remove pacote
     *
     * @param \AppBundle\Entity\Pacote $pacote
     */
    public function removePacote(\AppBundle\Entity\Pacote $pacote)
    {
        $this->pacote->removeElement($pacote);
    }

    /**
     * Get pacote
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPacote()
    {
        return $this->pacote;
    }

    /**
     * Add fosUser
     *
     * @param \AppBundle\Entity\FosUser $fosUser
     * @return Empresa
     */
    public function addFosUser(\AppBundle\Entity\FosUser $fosUser)
    {
        $this->fosUser[] = $fosUser;

        return $this;
    }

    /**
     * Remove fosUser
     *
     * @param \AppBundle\Entity\FosUser $fosUser
     */
    public function removeFosUser(\AppBundle\Entity\FosUser $fosUser)
    {
        $this->fosUser->removeElement($fosUser);
    }

    /**
     * Get fosUser
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFosUser()
    {
        return $this->fosUser;
    }
}
