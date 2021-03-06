<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Groupe
 *
 * @ORM\Table(name="groupe")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GroupeRepository")
 */
class Groupe
{
    /**
     * @ORM\ManyToMany(targetEntity="Voyage", mappedBy="groupes")
     */
    private $voyages;

    public function __construct() {
        $this->voyages = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;


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
     * Set nom
     *
     * @param string $nom
     * @return Groupe
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     * @return Groupe
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Add voyages
     *
     * @param \AppBundle\Entity\Voyage $voyages
     * @return Groupe
     */
    public function addVoyage(\AppBundle\Entity\Voyage $voyages)
    {
        $this->voyages[] = $voyages;

        return $this;
    }

    /**
     * Remove voyages
     *
     * @param \AppBundle\Entity\Voyage $voyages
     */
    public function removeVoyage(\AppBundle\Entity\Voyage $voyages)
    {
        $this->voyages->removeElement($voyages);
    }

    /**
     * Get voyages
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getVoyages()
    {
        return $this->voyages;
    }
}
