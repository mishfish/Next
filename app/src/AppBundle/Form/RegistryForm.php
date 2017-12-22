<?php

namespace AppBundle\Form;

use AppBundle\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class RegistryForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('referralId', TextType::class, array('label' => ' ','attr' => array('class' => 'form-control ref-id')))
            ->add('login', TextType::class, array('label' => ' ','attr' => array(
                'class' => 'form-control',
                'pattern' => '^[a-zA-Z0-9]+$')))
            ->add('password', RepeatedType::class, array(
                'type' => PasswordType::class,
                'first_options'  => array('label' => ' ', 'attr' => array('class' => 'form-control')),
                'second_options' => array('label' => ' ', 'attr' => array('class' => 'form-control'))
            ))
            ->add('nickName', TextType::class, array('label' => ' ','attr' => array(
                'class' => 'form-control',
                'pattern' => '^[A-Za-zА-Яа-яЁё\s]+$')));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => User::class,
        ));
    }
}