<?php
// src/Acme/DemoBundle/Admin/PostAdmin.php

namespace App\BackendBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class SexoAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('genero', 'text', array('label' => 'Genero'))
            ->add('id_user_created_at')
            ->add('created_at')
            ->add('id_user_updated_at')
            ->add('updated_at')
            //->add('body') //si no se especifica ningún tipo, SonataAdminBundle intenta adivinarlo
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('genero')
            ->add('id_user_created_at')
            ->add('created_at')
            ->add('id_user_updated_at')
            ->add('updated_at')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('genero')
            ->add('id_user_created_at')
            ->add('created_at')
            ->add('id_user_updated_at')
            ->add('updated_at')
        ;
    }

     /*
     * Método que se ejecuta antes de realizar una inserción.
     * Recibe como parámetro una entidad; en este caso de tipo Sexo
     * con los valores del formulario.
     * 
     */
 /*
    public function prePersist($sexo) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUser();
        $sexo->setIdUserCreatedAt($user->getId());
        $sexo->setCreatedAt(new \DateTime());
    }
*/
     /*
     * Método que se ejecuta antes de realizar una actualización.
     * Recibe como parámetro una entidad; en este caso de tipo Sexo
     * con los valores del formulario.
     * 
     */
/*    public function preUpdate($sexo) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUser();
        $sexo->setIdUserUpdatedAt($user->getId());
        $sexo->setUpdatedAt(new \DateTime());
    }
    */
}