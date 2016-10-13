<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClienteTipoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $prioridades = array(0=>'Alta',1=>'Media',2=>'Baja');
        $builder
            ->add('id','text',array('label'=>'Id (Abrev.)'))
            ->add('clienteTipo','text',array('label'=>'Tipo de cliente'))
            ->add('descripcion')
            ->add('prioridad','choice',array('choices'=>$prioridades))
            ->add('abrev','hidden')
            ->add('obs')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\ClienteTipo'
        ));
    }
}
