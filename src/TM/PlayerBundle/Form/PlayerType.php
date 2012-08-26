<?php

namespace TM\PlayerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PlayerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname')
            ->add('name')
            ->add('birthday')
            ->add('street')
            ->add('streetNumber')
            ->add('zip')
            ->add('city')
            ->add('mobile')
            ->add('phone')
            ->add('email')
            ->add('sportdata')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TM\PlayerBundle\Entity\Player'
        ));
    }

    public function getName()
    {
        return 'tm_playerbundle_playertype';
    }
}
