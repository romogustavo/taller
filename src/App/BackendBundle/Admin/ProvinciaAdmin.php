<?php

namespace App\BackendBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ProvinciaAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('nombreProvincia', 'text', array('label' => 'Nombre Provincia'))
            //->add('idUserCreatedAt', null, array('label' => 'Id Usuario'))
            //->add('createdAt', null, array('label' => 'Creado en'))
            //->add('idUserUpdatedAt', null, array('label' => 'Actualizacion de Usuario en'))
            //->add('updatedAt', null, array('label' => 'Actualizado en'))
            ->add('pais', 'entity', array('class' => 'App\BackendBundle\Entity\Pais'))
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('nombreProvincia', null, array('label' => 'Nombre de Provincia'))
            //->add('idUserCreatedAt', null, array('label' => 'Id Usuario'))
            //->add('createdAt', null, array('label' => 'Creado en'))
            //->add('idUserUpdatedAt', null, array('label' => 'Actualizacion de Usuario en'))
            //->add('updatedAt', null, array('label' => 'Actualizado en'))
            ->add('pais', null, array('label' => 'Pais'))
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('nombreProvincia', null, array('label' => 'Nombre de Provincia'))            
            ->add('idUserCreatedAt', null, array('label' => 'Id Usuario'))
            ->add('createdAt', null, array('label' => 'Creado en'))
            ->add('idUserUpdatedAt', null, array('label' => 'Actualizacion de Usuario en'))
            ->add('updatedAt', null, array('label' => 'Actualizado en'))
            ->add('pais', null, array('label' => 'Pais'))
            ->add('_action', 'actions', array('label' => 'Acciones', 'actions' => array(
                'show' => array(),
                'edit' => array(),
                'delete' => array(),
            )))
        ;
    }
    
    /*
     * Funcion configureShowFields
     * se utiliza para mostrar los datos de Boton SHOW en la lista de la entidad seleccionada
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('nombreProvincia')
            ->add('idUserCreatedAt', null, array('label' => 'Id Usuario'))
            ->add('createdAt', null, array('label' => 'Creado en'))
            ->add('idUserUpdatedAt', null, array('label' => 'Actualizacion de Usuario en'))
            ->add('updatedAt', null, array('label' => 'Actualizado en'))
            ->add('pais', null, array('label' => 'Pais'))
        ;

    }

     /*
     * Método que se ejecuta antes de realizar una inserción.
     * Recibe como parámetro una entidad; en este caso de tipo Provincia
     * con los valores del formulario.
     * 
     */
 
    public function prePersist($provincia) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUser();
        $provincia->setIdUserCreatedAt($user->getId());
        $provincia->setCreatedAt(new \DateTime());
    }

     /*
     * Método que se ejecuta antes de realizar una actualización.
     * Recibe como parámetro una entidad; en este caso de tipo Sexo
     * con los valores del formulario.
     * 
     */
    public function preUpdate($provincia) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUser();
        $provincia->setIdUserUpdatedAt($user->getId());
        $provincia->setUpdatedAt(new \DateTime());
    }
}