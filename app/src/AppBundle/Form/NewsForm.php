<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Ivory\CKEditorBundle\Form\Type\CKEditorType;

class NewsForm extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('categorieId',EntityType::class, array(
                'class' => 'AppBundle:NextNewsCategories', 
                'choice_label' => 'name',
                'label'  => 'Категория:', 
                'attr' => array('class' => 'input-right')
                ))
            ->add('caption', TextType::class, array(
                'label'  => 'Заголовок:', 
                'attr' => array('class' => 'form-control')
                ))
            ->add('announce', TextType::class, array(
                'label'  => 'Анонс (краткое описание):', 
                'attr' => array('class' => 'form-control')
                ))
            ->add('imageFile', VichImageType::class, array(
                'label'  => 'Изображение:', 
                'attr' => array('class' => 'form-control-file')
                ))
            ->add('textFull', CKEditorType::class, array(
                'label'  => 'Полный текст:', 
                'attr' => array('class' => 'form-control')
            ))
            ->add('relativeUrl', TextType::class, array(
                'label'  => 'Ссылка на новость (не обязательно):', 
                'required' => false,
                'attr' => array('class' => 'form-control')
            ));            
                
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\NextNews'
        ));
    }

}