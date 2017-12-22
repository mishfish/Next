<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * NextNews
 *
 * @ORM\Table(name="nextNews")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NextNewsRepository")
 * @Vich\Uploadable
 * @UniqueEntity(
 *   fields="relativeUrl",
 *   message="Этот адрес уже используется",
 *   errorPath="relativeUrl",
 * )
 */
class NextNews
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $Id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CreationDate", type="datetime")
     */
    private $creationDate;

    /**
     * @var string
     *
     * @ORM\Column(name="Caption", type="string", length=255)
     */
    private $caption;

    /**
     * @var string
     *
     * @ORM\Column(name="RelativeUrl", type="string", length=50, nullable=true)
     */
    private $relativeUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="AvatarUrl", type="string", length=255, nullable=true)
     */
     private $avatarUrl = null;
    
    /**
    * NOTE: This is not a mapped field of entity metadata, just a simple property.
    *
    * @Vich\UploadableField(mapping="next_news_image", fileNameProperty="AvatarUrl")
    * @var File
    */
    private $imageFile;

    /**
    * @var \DateTime
    *
    * @ORM\Column(name="ImageUpdateTime", type="datetime" , nullable=true)
    */
    private $ImageUpdateTime = null;
    
    /**
     * @var string
     *
     * @ORM\Column(name="Announce", type="string", length=255)
     */
    private $announce;

    /**
     * @var string
     *
     * @ORM\Column(name="TextFull", type="text")
     */
    private $textFull;

    /**
     *
     * Many Posts have One Author
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumn(name="Author", referencedColumnName="Id", nullable=false)
     */
     private $author;

    /**
    * @var Category
    * Many News have one Category
    * @ORM\ManyToOne(targetEntity="AppBundle\Entity\NextNewsCategories")
    * @ORM\JoinColumn(name="CategorieId", referencedColumnName="Id", nullable=false)
    */
    private $categorieId;


    /**
     * Get Id
     *
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    // Set creationDate
    public function __construct() {
        $this->creationDate = new \DateTime('now');
    }

    /**
     * Get creationDate
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Set caption
     *
     * @param string $caption
     *
     * @return NextNews
     */
    public function setCaption($caption)
    {
        $this->caption = $caption;

        return $this;
    }

    /**
     * Get caption
     *
     * @return string
     */
    public function getCaption()
    {
        return $this->caption;
    }

    /**
     * Set relativeUrl
     *
     * @param string $relativeUrl
     *
     * @return NextNews
     */
    public function setRelativeUrl($relativeUrl)
    {
        $this->relativeUrl = $relativeUrl;

        return $this;
    }

    /**
     * Get relativeUrl
     *
     * @return string
     */
    public function getRelativeUrl()
    {
        return $this->relativeUrl;
    }

    /**
     * Set announce
     *
     * @param string $announce
     *
     * @return NextNews
     */
    public function setAnnounce($announce)
    {
        $this->announce = $announce;

        return $this;
    }

    /**
     * Get announce
     *
     * @return string
     */
    public function getAnnounce()
    {
        return $this->announce;
    }

    /**
     * Set textFull
     *
     * @param string $textFull
     *
     * @return NextNews
     */
    public function setTextFull($textFull)
    {
        $this->textFull = $textFull;

        return $this;
    }

    /**
     * Get textFull
     *
     * @return string
     */
    public function getTextFull()
    {
        return $this->textFull;
    }

    /**
     * Set author
     *
     * @param int $author
     *
     * @return NextNews
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return User
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set categorieId
     *
     * @param integer $categorieId
     *
     * @return NextNews
     */
    public function setCategorieId($categorieId)
    {
        $this->categorieId = $categorieId;

        return $this;
    }

    /**
     * Get categorieId
     *
     * @return int
     */
    public function getCategorieId()
    {
        return $this->categorieId;
    }

    /**
    * @param string $avatarUrl
    *
    * @return NextNews
    */
    public function setAvatarUrl($avatarUrl)
    {
        $this->avatarUrl = $avatarUrl;

        return $this;
    }

    /**
    * Get image
    *
    * @return string
    */
    public function getAvatarUrl()
    {
        return $this->avatarUrl;
    }

    public function setImageFile(File $avatarUrl = null)
    {
        $this->imageFile = $avatarUrl;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($avatarUrl) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->ImageUpdateTime = new \DateTime("now");
        }

        return $this;
    }

    /**
    *@return File|null
    */
    public function getImageFile()
    {
        return $this->imageFile;
    }

    public function getImageUpdateTime()
    {
        return $this->ImageUpdateTime;
    }

}

