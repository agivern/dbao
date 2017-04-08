<?php
namespace DBAO\BDDBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 */
class Realisation
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
    private $titre;

    /**
     * @ORM\Column(type="string",length=255)
     * @Assert\NotBlank()
     * @Assert\MinLength(3)
     */
    private $accroche;


    /**
     * @ORM\Column(type="string", length=1000)
     * @Assert\NotBlank()
     * @Assert\MinLength(3)
     */
    private $description;

    /**
     * @ORM\Column(type="string",length=255, nullable=false)
     */
    private $url;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     */
    private $first;

    /**
     * @ORM\Column(type="integer")
     */
    private $emplacement;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     */
    public $strategie;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     */
    private $developpement;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     */
    private $design;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     */
    private $motion;

    public function getAbsoluteUrl()
    {
        return null === $this->url ? null : $this->getUploadRootDir().'/'.$this->url;
    }

    public function getWebUrl()
    {
        return null === $this->url ? null : $this->getUploadDir().'/'.$this->url;
    }

    protected function getUploadRootDir()
    {
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        return 'uploads/documents';
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
     * Set titre
     *
     * @param string $titre
     * @return Realisation
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
     * @return Realisation
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
     * Set url
     *
     * @param string $url
     * @return Realisation
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

    /**
     * Set first
     *
     * @param boolean $first
     * @return Realisation
     */
    public function setFirst($first)
    {
        $this->first = $first;
    
        return $this;
    }

    /**
     * Get first
     *
     * @return boolean 
     */
    public function getFirst()
    {
        return $this->first;
    }

    /**
     * Set emplacement
     *
     * @param integer $emplacement
     * @return Realisation
     */
    public function setEmplacement($emplacement)
    {
        $this->emplacement = $emplacement;
    
        return $this;
    }

    /**
     * Get emplacement
     *
     * @return integer 
     */
    public function getEmplacement()
    {
        return $this->emplacement;
    }

    /**
     * Set developpement
     *
     * @param boolean $developpement
     * @return Realisation
     */
    public function setDeveloppement($developpement)
    {
        $this->developpement = $developpement;
    
        return $this;
    }

    /**
     * Get developpement
     *
     * @return boolean 
     */
    public function getDeveloppement()
    {
        return $this->developpement;
    }

    /**
     * Set design
     *
     * @param boolean $design
     * @return Realisation
     */
    public function setDesign($design)
    {
        $this->design = $design;
    
        return $this;
    }

    /**
     * Get design
     *
     * @return boolean 
     */
    public function getDesign()
    {
        return $this->design;
    }

    /**
     * Set strategie
     *
     * @param boolean $strategie
     * @return Realisation
     */
    public function setStrategie($strategie)
    {
        $this->strategie = $strategie;
    
        return $this;
    }

    /**
     * Get strategie
     *
     * @return boolean 
     */
    public function getStrategie()
    {
        return $this->strategie;
    }

    /**
     * Set motion
     *
     * @param boolean $motion
     * @return Realisation
     */
    public function setMotion($motion)
    {
        $this->motion = $motion;
    
        return $this;
    }

    /**
     * Get motion
     *
     * @return boolean 
     */
    public function getMotion()
    {
        return $this->motion;
    }

    /**
     * Set accroche
     *
     * @param string $accroche
     * @return Realisation
     */
    public function setAccroche($accroche)
    {
        $this->accroche = $accroche;
    
        return $this;
    }

    /**
     * Get accroche
     *
     * @return string 
     */
    public function getAccroche()
    {
        return $this->accroche;
    }
}