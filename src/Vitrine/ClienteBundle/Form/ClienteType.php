<?php

namespace Vitrine\ClienteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ClienteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomeCompleto')
            ->add('cpf')
            ->add('sexo')
            ->add('dataDeNascimento')
            ->add('telefone')
            ->add('email')
            ->add('senha')
            ->add('recebeOfertas')
            ->add('endereco')
            ->add('numero')
            ->add('cep')
            ->add('bairro')
            ->add('cidade')
            ->add('estado')
            ->add('pais')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Vitrine\ClienteBundle\Entity\Cliente'
        ));
    }

    public function getName()
    {
        return 'vitrine_clientebundle_clientetype';
    }
}
