<?php

namespace SIts\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname')
            ->add('lastname')
            ->add('email', 'email', array('label' => 'Email', 'attr'=>array('autocapitalize'=>'off', 'autocorrect'=>'off')))
            ->add('password', 'password', array('required'=> false, 'always_empty' => false))
            ->add('roles', 'choice', array(
                'choices'   => array(
                    'ROLE_USER' => 'User',
                    'ROLE_ADMIN' => 'Admin',
                    'ROLE_SUPER_ADMIN' => 'Super-Admin',
                ),
                'multiple'  => true,
            ))
            ->getForm()
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SIts\UserBundle\Entity\User'
        ));
    }
}
