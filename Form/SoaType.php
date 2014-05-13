<?php
/**
 * powerdns-api
 * @author   M. Seifert <m.seifert@syseleven.de>
  * @package SysEleven\PowerDnsBundle\Form
 */
namespace SysEleven\PowerDnsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
 
/**
 * Form used to handle soa updates,
 *
 * @author M. Seifert <m.seifert@syseleven.de>
 * @package SysEleven\PowerDnsBundle\Form
 */
class SoaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('primary', 'text', array('required' => false))
            ->add('hostmaster', 'text', array('required' => false))
            ->add('serial','text',array('required' => false))
            ->add('refresh','integer',array('required' => false))
            ->add('expire','integer',array('required' => false))
            ->add('default_ttl','integer', array('required' => false));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(
            array(
                'csrf_protection' => false,
                'data_class' => 'SysEleven\PowerDnsBundle\Lib\Soa',
            ));
    }


    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        return '';
    }
}
 