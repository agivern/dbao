<?php
namespace DBAO\BDDBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 */
class Personnel
{
    /**
     * @Assert\File(maxSize="6000000")
     */
    public $file;

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
    private $nom;

    /**
     * @ORM\Column(type="string",length=255)
     */
    private $statut;

    /**
     * @ORM\Column(type="string",length=255)
     * @Assert\NotBlank()
     * @Assert\MinLength(3)
     */
    private $fonction;

    /**
     * @ORM\Column(type="string",length=1000)
     * @Assert\NotBlank()
     * @Assert\MinLength(3)
     */
    private $phrase;

    /**
     * @ORM\Column(type="string",length=255, nullable=false)
     */
    private $url;

    protected function getUploadRootDir()
    {
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        return 'uploads/documents';
    }

    public function getAbsoluteUrl()
    {
        return null === $this->url ? null : $this->getUploadRootDir().'/'.$this->url;
    }


    public function getWebUrl()
    {
        return null === $this->url ? null : $this->getUploadDir().'/'.$this->url;
    }

    public function upload()
    {
        if (null === $this->file) {
            return;
        }

        $this->file->move($this->getUploadRootDir(), $this->file->getClientOriginalName());
        $this->url = $this->file->getClientOriginalName();
        $this->file = null;
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
     * Set nom
     *
     * @param string $nom
     * @return Personnel
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
     * Set statut
     *
     * @param string $statut
     * @return Personnel
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;
    
        return $this;
    }

    /**
     * Get statut
     *
     * @return string 
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set fonction
     *
     * @param string $fonction
     * @return Personnel
     */
    public function setFonction($fonction)
    {
        $this->fonction = $fonction;
    
        return $this;
    }

    /**
     * Get fonction
     *
     * @return string 
     */
    public function getFonction()
    {
        return $this->fonction;
    }

    /**
     * Set phrase
     *
     * @param string $phrase
     * @return Personnel
     */
    public function setPhrase($phrase)
    {
        $this->phrase = $phrase;
    
        return $this;
    }

    /**
     * Get phrase
     *
     * @return string 
     */
    public function getPhrase()
    {
        return $this->phrase;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Personnel
     */
    public function setUrl($url)
    {
        $this->url = $url;
    
        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }
}
