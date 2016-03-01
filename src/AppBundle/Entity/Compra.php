<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Compra
 */
class Compra
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $quantidade;

    /**
     * @var float
     */
    private $preco;

    /**
     * @var \DateTime
     */
    private $dtCadastro;

    /**
     * @var \AppBundle\Entity\Produto
     */
    private $produto;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $pdv;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->pdv = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set quantidade
     *
     * @param string $quantidade
     * @return Compra
     */
    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;

        return $this;
    }

    /**
     * Get quantidade
     *
     * @return string 
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * Set preco
     *
     * @param float $preco
     * @return Compra
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
     * Set dtCadastro
     *
     * @param \DateTime $dtCadastro
     * @return Compra
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
     * Set produto
     *
     * @param \AppBundle\Entity\Produto $produto
     * @return Compra
     */
    public function setProduto(\AppBundle\Entity\Produto $produto = null)
    {
        $this->produto = $produto;

        return $this;
    }

    /**
     * Get produto
     *
     * @return \AppBundle\Entity\Produto 
     */
    public function getProduto()
    {
        return $this->produto;
    }

    /**
     * Add pdv
     *
     * @param \AppBundle\Entity\Pdv $pdv
     * @return Compra
     */
    public function addPdv(\AppBundle\Entity\Pdv $pdv)
    {
        $this->pdv[] = $pdv;

        return $this;
    }

    /**
     * Remove pdv
     *
     * @param \AppBundle\Entity\Pdv $pdv
     */
    public function removePdv(\AppBundle\Entity\Pdv $pdv)
    {
        $this->pdv->removeElement($pdv);
    }

    /**
     * Get pdv
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPdv()
    {
        return $this->pdv;
    }
}
