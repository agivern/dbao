<?php
namespace DBAO\BDDBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 */
class News
{

    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string",length=255)
     * @Assert\NotBlank()
     * @Assert\MinLength(3)
     */
    private $titre;

    /**
     * @ORM\Column(type="string",length=255)
     * @Assert\NotBlank()
     * @Assert\MinLength(3)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=3000)
     * @Assert\NotBlank()
     * @Assert\MinLength(3)
     */
    private $texte;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

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
     * Set titre
     *
     * @param string $titre
     * @return News
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    
        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return News
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set texte
     *
     * @param string $texte
     * @return News
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;
    
        return $this;
    }

    /**
     * Get texte
     *
     * @return string 
     */
    public function getTexte()
    {
        return $this->texte;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return News
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }
}