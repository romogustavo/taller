<?php

namespace App\BackendBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;


class LocalidadAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('nombre_localidad', 'text', array('label' => 'Nombre de Localidad'))
            //->add('id_user_created_at', null, array('label' => 'Id Usuario'))
            //->add('created_at', null, array('label' => 'Creado en'))
            //->add('id_user_updated_at', null, array('label' => 'Actualizacion de Usuario en'))
            //->add('updated_at', null, array('label' => 'Actualizado en'))
            ->add('provincia', 'entity', array('class' => 'App\BackendBundle\Entity\Provincia'))
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('nombre_localidad', null, array('label' => 'Nombre de Localidad'))
            //->add('id_user_created_at', null, array('label' => 'Id Usuario'))
            //->add('created_at', null, array('label' => 'Creado en'))
            //->add('id_user_updated_at', null, array('label' => 'Actualizacion de Usuario en'))
            //->add('updated_at', null, array('label' => 'Actualizado en'))
            ->add('provincia', null, array('label' => 'Provincia'))
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('nombre_localidad', null, array('label' => 'Nombre de Localidad'))
            ->add('id_user_created_at', null, array('label' => 'Id Usuario'))
            ->add('created_at', null, array('label' => 'Creado en'))
            ->add('id_user_updated_at', null, array('label' => 'Actualizacion de Usuario en'))
            ->add('updated_at', null, array('label' => 'Actualizado en'))
            ->add('provincia', null, array('label' => 'Provincia'))
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
            ->add('nombre_localidad')
            ->add('id_user_created_at', null, array('label' => 'Id Usuario'))
            ->add('created_at', null, array('label' => 'Creado en'))
            ->add('id_user_updated_at', null, array('label' => 'Actualizacion de Usuario en'))
            ->add('updated_at', null, array('label' => 'Actualizado en'))
            ->add('provincia', null, array('label' => 'Provincia'))
        ;

    }

     /*
     * Método que se ejecuta antes de realizar una inserción.
     * Recibe como parámetro una entidad; en este caso de tipo Sexo
     * con los valores del formulario.
     * 
     */

    public function prePersist($localidad) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUser();
        $localidad->setIdUserCreatedAt($user->getId());
        $localidad->setCreatedAt(new \DateTime());
    }

     /*
     * Método que se ejecuta antes de realizar una actualización.
     * Recibe como parámetro una entidad; en este caso de tipo Sexo
     * con los valores del formulario.
     * 
     */
    
    public function preUpdate($localidad) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUser();
        $localidad->setIdUserUpdatedAt($user->getId());
        $localidad->setUpdatedAt(new \DateTime());
    }    
}