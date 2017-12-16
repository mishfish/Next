<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NextNewsCategories
 *
 * @ORM\Table(name="nextNewsCategories")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NextNewsCategoriesRepository")
 */
class NextNewsCategories
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
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=255, unique=true)
     */
    private $Name;


    /**
     * Get Id
     *
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Set name
     *
     * @param string $Name
     *
     * @return NextNewsCategories
     */
    public function setName($Name)
    {
        $this->Name = $Name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    public function __toString(){
        // to show the name of the Category in the select
        return $this->Name;
        // to show the Id of the Category in the select
        // return $this->Id;
    }
}

