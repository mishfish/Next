<?php

namespace AppBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="`nextUsers`")
* @ORM\AttributeOverrides({
*      @ORM\AttributeOverride(name="username",
*          column=@ORM\Column(
*              name     = "Login",
*          )
*      ),
*      @ORM\AttributeOverride(name="usernameCanonical",
*          column=@ORM\Column(
*              name     = "LoginCanonical",
*          )
*      ),
*      @ORM\AttributeOverride(name="emailCanonical",
*          column=@ORM\Column(
*              name     = "EmailCanonical",
*              unique=false, 
*              nullable=true
*          )
*      ),
*      @ORM\AttributeOverride(name="email", 
*           column=@ORM\Column(
*               type="string", 
*               name="Email", 
*               length=255, 
*               unique=false, 
*               nullable=true
*           )
*      )
* })  
*/

class NextUser extends BaseUser
{
    /**
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(type="integer")
    */
    protected $id;
    
    public function getId()
    {
        return $this->id;
    }

    /**
    *@var string
    *
    * @ORM\Column(name="NickName",type="string", unique=true)
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    protected $nickName;

    public function setNickName($nickName)
    {
        $this->setEmail('');
        $this->nickName = $nickName;
        // return parent::setNickName($nickName);
        return $this;
    }

    public function getNickName()
    {
        return $this->nickName;
    }
}