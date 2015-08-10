<?php

namespace Victoire\Bundle\BusinessEntityPageBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Victoire\Bundle\PageBundle\Form\PageSettingsType;

/**
 * businessEntityPageType
 */
class BusinessEntityPageType extends PageSettingsType
{

    /*
    * Constructor
    */
    public function __construct($availableLocales, RequestStack $requestStack)
    {
        parent::__construct($availableLocales, $requestStack);
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     *
     * @SuppressWarnings checkUnusedFunctionParameters
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder->remove('slug');
        $builder->add('slug', 'hidden');
        $builder->add('staticUrl', null, array(
                'label' => 'form.page.type.slug.label'
            )
        );
    }

    /**
     * The name of the form
     *
     * @return string
     */
    public function getName()
    {
        return 'victoire_business_entity_page_type';
    }
}
