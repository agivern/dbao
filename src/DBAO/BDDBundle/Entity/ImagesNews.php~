<?php
namespace DBAO\BDDBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 */
class ImagesNews
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
     * @ORM\Column(type="string",length=255, nullable=false)
     */
    private $url;

    /**
     * @ORM\Column(type="integer")
     */
    private $emplacement;

    /**
     * @ORM\ManyToOne(targetEntity="DBAO\BDDBundle\Entity\News")
     * @ORM\JoinColumn(nullable=false)
     */
    private $news;

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
     * Set url
     *
     * @param string $url
     * @return ContenuRealisation
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
     * Set emplacement
     *
     * @param integer $emplacement
     * @return ContenuRealisation
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
     * Set realisation
     *
     * @param \DBAO\BDDBundle\Entity\Realisation $realisation
     * @return ContenuRealisation
     */
    public function setNews(\DBAO\BDDBundle\Entity\News $news)
    {
        $this->news = $news;
    
        return $this;
    }

    /**
     * Get realisation
     *
     * @return \DBAO\BDDBundle\Entity\Realisation 
     */
    public function getNews()
    {
        return $this->news;
    }
}