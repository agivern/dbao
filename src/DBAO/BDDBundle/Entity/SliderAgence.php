<?php
namespace DBAO\BDDBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 */
class SliderAgence
{
    /**
     * @Assert\File(maxSize="6000000")
     */
    public $bigFile;

    /**
     * @Assert\File(maxSize="6000000")
     */
    public $littleFile;

    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $emplacement;

    /**
     * @ORM\Column(type="string",length=255, nullable=false)
     */
    private $bigUrl;

    /**
     * @ORM\Column(type="string",length=255, nullable=false)
     */
    private $littleUrl;

    protected function getUploadRootDir()
    {
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        return 'uploads/documents';
    }

    public function getAbsoluteBigUrl()
    {
        return null === $this->bigUrl ? null : $this->getUploadRootDir().'/'.$this->bigUrl;
    }

    public function getAbsoluteLittleUrl()
    {
        return null === $this->littleUrl ? null : $this->getUploadRootDir().'/'.$this->littleUrl;
    }

    public function getWebBigUrl()
    {
        return null === $this->bigUrl ? null : $this->getUploadDir().'/'.$this->bigUrl;
    }

    public function getWebLittleUrl()
    {
        return null === $this->littleUrl ? null : $this->getUploadDir().'/'.$this->littleUrl;
    }

    public function uploadBig()
    {
        if (null === $this->bigFile) {
            return;
        }

        $this->bigFile->move($this->getUploadRootDir(), $this->bigFile->getClientOriginalName());
        $this->bigUrl = $this->bigFile->getClientOriginalName();
        $this->bigFile = null;
    }

    public function uploadLittle()
    {
        if (null === $this->littleFile) {
            return;
        }

        $this->littleFile->move($this->getUploadRootDir(), $this->littleFile->getClientOriginalName());
        $this->littleUrl = $this->littleFile->getClientOriginalName();
        $this->littleFile = null;
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
     * Set emplacement
     *
     * @param integer $emplacement
     * @return Slider
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
     * Set bigUrl
     *
     * @param string $bigUrl
     * @return Slider
     */
    public function setBigUrl($bigUrl)
    {
        $this->bigUrl = $bigUrl;
    
        return $this;
    }

    /**
     * Get bigUrl
     *
     * @return string 
     */
    public function getBigUrl()
    {
        return $this->bigUrl;
    }

    /**
     * Set littleUrl
     *
     * @param string $littleUrl
     * @return Slider
     */
    public function setLittleUrl($littleUrl)
    {
        $this->littleUrl = $littleUrl;
    
        return $this;
    }

    /**
     * Get littleUrl
     *
     * @return string 
     */
    public function getLittleUrl()
    {
        return $this->littleUrl;
    }
}
