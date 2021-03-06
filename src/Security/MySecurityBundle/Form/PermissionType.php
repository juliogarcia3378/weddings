<?php

namespace Security\MySecurityBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PermissionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('denominacion',null,array('label'=>"Denominación",'attr'=>array('placeholder'=>'Denominación')))
            ->add('permiso',null,array('attr'=>array('placeholder'=>'Permiso')))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ADEPSOFT\MySecurityBundle\Entity\Permission'
        ));
    }

    public function getName()
    {
        return 'adepsoft_mysecuritybundle_permisotype';
    }
}
