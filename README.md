# SymfonyFormBooleanType

Custom type for Symfony form used to support boolean values.
This allows to use **boolean type** for forms among standard Symfony types.   

Form of **type_boolean** allows to enter true or false values. 
Default value: false. 

## Sample usage:
<pre>
    <code>
    use Symfony\Component\Form\AbstractType;
    use Symfony\Component\Form\FormBuilderInterface;
    
    class SampleFormType extends AbstractType
    {
        /**
         * @param FormBuilderInterface $builder
         * @param array $options
         */
        public function buildForm(FormBuilderInterface $builder, array $options)
        {
            $builder
                ->add('name')
                ->add('date', 'datetime')
                ->add('visible', 'type_boolean')
            ;
        }
    </code>
</pre>   
 
 
More about custom form types in Symfony: http://symfony.com/doc/current/cookbook/form/create_custom_field_type.html