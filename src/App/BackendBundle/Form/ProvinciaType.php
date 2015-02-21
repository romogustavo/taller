<?php

namespace App\BackendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProvinciaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombreProvincia')
            ->add('idUserCreatedAt')
            ->add('createdAt')
            ->add('idUserUpdatedAt')
            ->add('updatedAt')
            ->add('pais')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\BackendBundle\Entity\Provincia'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'app_backendbundle_provincia';
    }
}
