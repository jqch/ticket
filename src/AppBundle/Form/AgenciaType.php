<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AgenciaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('agenciaTipo')
            ->add('codigo')
            ->add('agencia')
            ->add('direccion')
            ->add('telefono')
            ->add('celular')
            ->add('fechaApertura', 'date')
            ->add('fechaCierre', 'date')
            ->add('obs')
            ->add('anchobanda')
            ->add('esactivo')
            ->add('lugar')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Agencia'
        ));
    }
}
