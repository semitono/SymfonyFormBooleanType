<?php

namespace Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BooleanType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        if ($options['transform']) {
            $builder->addModelTransformer(new BooleanTypeTransformer());
        }
    }

    /**
     * Set parameters for the boolean field. Acceptable values: true, false.
     * Default value: false
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'choices' => array(
                true,
                false
            ),
            'transform' => true,
            'compound' => false,
            'empty_data' => false
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'type_boolean';
    }
}