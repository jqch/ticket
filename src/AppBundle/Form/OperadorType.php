<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\ORM\EntityRepository;

class OperadorType extends AbstractType
{
    private $agenciasId;
    private $operadoresTipo;

    public function __construct($agenciasId = null, $operadoresTipo = null){
        $this->agenciasId = $agenciasId;
        $this->operadoresTipo = $operadoresTipo;
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $agenciasId = $this->agenciasId;
        $operadoresTipo = $this->operadoresTipo;

        $builder
            ->add('ci')
            ->add('paterno')
            ->add('materno')
            ->add('nombres')
            ->add('usuario')
            ->add('clave')
            ->add('esactivo')
            ->add('obs')
            ->add('agencia')
            ->add('agencia', 'entity', array(
                'class' => 'AppBundle:Agencia',
                'property' => 'agencia',
                'query_builder' => function(EntityRepository $er) use ($agenciasId){
                    return $er->createQueryBuilder('a')
                    ->where('a.id IN (:ids)')
                    ->setParameter('ids', $agenciasId);
                },
                'empty_value' => 'Seleccionar...'))//,'data' => $em->getReference("SieAppWebBundle:Agencia", 'agencia'))
            ->add('operadorTipo', 'entity', array(
                'class' => 'AppBundle:OperadorTipo',
                'property' => 'operadorTipo',
                'query_builder' => function(EntityRepository $er) use ($operadoresTipo){
                    return $er->createQueryBuilder('ot')
                    ->where('ot.id IN (:ids)')
                    ->setParameter('ids', $operadoresTipo);
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
