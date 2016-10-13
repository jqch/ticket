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
            ->add('agenciaTipo','hidden',array('data'=>2))
            ->add('codigo')
            ->add('agencia')
            ->add('direccion')
            ->add('telefono')
            ->add('celular')
            ->add('fechaApertura', 'date', array('label'=>'Fecha Apertura'))
            ->add('fechaCierre', 'date', array('label'=>'Fecha Cierre'))
            ->add('obs')
            ->add('anchobanda','text',array('label'=>'Ancho de Banda (kbps)','data'=>'1024'))
            ->add('esactivo','checkbox',array('label'=>'Habilitado'))
            ->add('lugar')
            ->add('papelporcentaje','text',array('label'=>'% Papel de impresora'))
            ->add('frase','text',array('label'=>'Frase'))
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
