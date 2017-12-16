<?php
// Note that the namespace must match with
// your project !
namespace AppBundle\Extensions;

use Symfony\Bridge\Doctrine\RegistryInterface;

class MenuTwigExtension extends \Twig_Extension
{    
    public function getFunctions()
    {
        // Register the function in twig :
        // In your template you can use it as : {{findAll()}}
        return array(
            new \Twig_SimpleFunction('findAll', array($this, 'findAll')),
        );
    }
    
    protected $doctrine;
    // Retrieve doctrine from the constructor
    public function __construct(RegistryInterface $doctrine)
    {
        $this->doctrine = $doctrine;
    }

    public function findAll(){
        $em = $this->doctrine->getManager();
        $myRepo = $em->getRepository('AppBundle:NextMenuItems');

        return $myRepo->findAll();
    }
    
    public function getName()
    {
        return 'Twig myCustomName Extensions';
    }
}