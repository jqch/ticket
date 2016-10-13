<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\ORM\EntityRepository;

class OperadorType extends AbstractType
{
    
    private $agenciasId;
    private $areasTipo;

    public function __construct($agenciasId = null, $areasTipo = null){
        $this->agenciasId = $agenciasId;
        $this->areasTipo = $areasTipo;
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $agenciasId = $this->agenciasId;
        $areasTipo = $this->areasTipo;

        $builder
            ->add('ci')
            ->add('paterno')
            ->add('materno')
            ->add('nombres')
            ->add('usuario')
            ->add('contrasena','password')
            ->add('esactivo','checkbox',array('label'=>'Habilitado'))
            ->add('obs')
            ->add('agencia', 'entity', array(
                'class' => 'AppBundle:Agencia',
                'property' => 'agencia',
                'query_builder' => function(EntityRepository $er) use ($agenciasId){
                    return $er->createQueryBuilder('a')
                    ->where('a.id IN (:ids)')
                    ->setParameter('ids', $agenciasId);
                },
                'empty_value' => 'Seleccionar...'))//,'data' => $em->getReference("SieAppWebBundle:Agencia", 'agencia'))
            ->add('areaTipo', 'entity', array(
                'class' => 'AppBundle:AreaTipo',
                'property' => 'areaTipo',
                'query_builder' => function(EntityRepository $er) use ($areasTipo){
                    return $er->createQueryBuilder('at')
                    ->where('at.id IN (:ids)')
                    ->setParameter('ids', $areasTipo);
                },
                'empty_value' => 'Seleccionar...'))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Operador'
        ));
    }
}
