<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NextMenuItems
 *
 * @ORM\Table(name="nextMenuItems")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NextMenuItemsRepository")
 */
class NextMenuItems
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="Url", type="string", length=255)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="PopupText", type="string", length=255)
     */
    private $popupText;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return NextMenuItems
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return NextMenuItems
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
     * Set popupText
     *
     * @param string $popupText
     *
     * @return NextMenuItems
     */
    public function setPopupText($popupText)
    {
        $this->popupText = $popupText;

        return $this;
    }

    /**
     * Get popupText
     *
     * @return string
     */
    public function getPopupText()
    {
        return $this->popupText;
    }
}

