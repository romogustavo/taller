<?php

namespace App\BackendBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class PaisAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('nombrePais', 'text', array('label' => 'Nombre de Pais'))
            //->add('idUserCreatedAt', null, array('label' => 'Id Usuario'))
            //->add('createdAt', null, array('label' => 'Creado en'))
            //->add('idUserUpdatedAt', null, array('label' => 'Actualizacion de Usuario en'))
            //->add('updatedAt', null, array('label' => 'Actualizado en'))
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('nombrePais', null, array('label' => 'Nombre de Pais'))
            //->add('idUserCreatedAt', null, array('label' => 'Id Usuario'))
            //->add('createdAt', null, array('label' => 'Creado en'))
            //->add('idUserUpdatedAt', null, array('label' => 'Actualizacion de Usuario en'))
            //->add('updatedAt', null, array('label' => 'Actualizado en'))
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('nombrePais', null, array('label' => 'Nombre de Pais'))            
            ->add('idUserCreatedAt', null, array('label' => 'Id Usuario'))
            ->add('createdAt', null, array('label' => 'Creado en'))
            ->add('idUserUpdatedAt', null, array('label' => 'Actualizacion de Usuario en'))
            ->add('updatedAt', null, array('label' => 'Actualizado en'))
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
            ->add('nombrePais')
            ->add('idUserCreatedAt', null, array('label' => 'Id Usuario'))
            ->add('createdAt', null, array('label' => 'Creado en'))
            ->add('idUserUpdatedAt', null, array('label' => 'Actualizacion de Usuario en'))
            ->add('updatedAt', null, array('label' => 'Actualizado en'))
            
        ;

    }
     /*
     * Método que se ejecuta antes de realizar una inserción.
     * Recibe como parámetro una entidad; en este caso de tipo Sexo
     * con los valores del formulario.
     * 
     */
 
    public function prePersist($pais) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUser();
        $pais->setIdUserCreatedAt($user->getId());
        $pais->setCreatedAt(new \DateTime());
    }

     /*
     * Método que se ejecuta antes de realizar una actualización.
     * Recibe como parámetro una entidad; en este caso de tipo Sexo
     * con los valores del formulario.
     * 
     */
    public function preUpdate($pais) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUser();
        $pais->setIdUserUpdatedAt($user->getId());
        $pais->setUpdatedAt(new \DateTime());
    }
}