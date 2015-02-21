<?php
// src/Acme/DemoBundle/Admin/PostAdmin.php

namespace App\BackendBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class PostAdmin extends Admin
{
    // Los campos que se muestran en crear/editar forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('title', 'text', array('label' => 'Post Title'))
            ->add('author', 'entity', array('class' => 'Acme\DemoBundle\Entity\User'))
            ->add('body') //si no se especifica ningún tipo, SonataAdminBundle intenta adivinarlo
        ;
    }

    // Los campos que se muestran en filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('title')
            ->add('author')
        ;
    }

    // Los campos que se muestran en lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('title')
            ->add('slug')
            ->add('author')
        ;
    }
}