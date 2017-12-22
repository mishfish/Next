<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * User
 *
 * @ORM\Table(name="NextMembers")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class User implements UserInterface, \Serializable
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
     * @ORM\Column(name="Login", type="string", length=20, unique=true, nullable=true)
     * @Assert\NotBlank()
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=50, unique=true, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="NickName", type="string", length=100, nullable=true)
     */
    private $nickName;

    /**
     * @var string
     *
     * @ORM\Column(name="Password", type="string", length=64, nullable=true)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="ProfileUrl", type="string", length=255, unique=true, nullable=true)
     */
    private $profileUrl;

    /**
     * @var int
     *
     * @ORM\Column(name="RoleId", type="integer", nullable=true)
     */
    private $roleId;

    /**
     * @var string
     *
     * @ORM\Column(name="AvatarUrl", type="string", length=255, nullable=true)
     */
    private $avatarUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="ReferralId", type="string", length=60, unique=true)
     */
    private $referralId;

    /**
     * @var bool
     *
     * @ORM\Column(name="Enabled", type="boolean", nullable=true)
     */
    private $enabled;

    public function getRoles()
    {
        return array('ROLE_USER');
    }

    public function eraseCredentials()
    {
    }

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
     * Set login
     *
     * @param string $login
     *
     * @return User
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set nickName
     *
     * @param string $nickName
     *
     * @return User
     */
    public function setNickName($nickName)
    {
        $this->nickName = $nickName;

        return $this;
    }

    /**
     * Get nickName
     *
     * @return string
     */
    public function getNickName()
    {
        return $this->nickName;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set profileUrl
     *
     * @param string $profileUrl
     *
     * @return User
     */
    public function setProfileUrl($profileUrl)
    {
        $this->profileUrl = $profileUrl;

        return $this;
    }

    /**
     * Get profileUrl
     *
     * @return string
     */
    public function getProfileUrl()
    {
        return $this->profileUrl;
    }

    /**
     * Set roleId
     *
     * @param integer $roleId
     *
     * @return User
     */
    public function setRoleId($roleId)
    {
        $this->roleId = $roleId;

        return $this;
    }

    /**
     * Get roleId
     *
     * @return int
     */
    public function getRoleId()
    {
        return $this->roleId;
    }

    /**
     * Set avatarUrl
     *
     * @param string $avatarUrl
     *
     * @return User
     */
    public function setAvatarUrl($avatarUrl)
    {
        $this->avatarUrl = $avatarUrl;

        return $this;
    }

    /**
     * Get avatarUrl
     *
     * @return string
     */
    public function getAvatarUrl()
    {
        return $this->avatarUrl;
    }

    /**
     * Set referralId
     *
     * @param string $referralId
     *
     * @return User
     */
    public function setReferralId($referralId)
    {
        $this->referralId = $referralId;

        return $this;
    }

    /**
     * Get referralId
     *
     * @return string
     */
    public function getReferralId()
    {
        return $this->referralId;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     *
     * @return User
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    public function getUsername()
    {
        return $this->login;
    }

    public function getSalt()
    {
        return null;
    }

    /**
    * @return string
    */
    public function __toString()
    {
        return (string) $this->getNickName();
    }

     /** @see \Serializable::serialize() */
     public function serialize()
     {
         return serialize(array(
             $this->id,
             $this->nickName,
             $this->password,
         ));
     }
 
     /** @see \Serializable::unserialize() */
     public function unserialize($serialized)
     {
         list (
             $this->id,
             $this->nickName,
             $this->password,
         ) = unserialize($serialized);
     }
}

