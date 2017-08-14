<?php

namespace Explorer\AdminBundle\Form\Type;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;

class ListingType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('featuredImage', VichImageType::class, [
                'required' => false,
                'allow_delete' => true,
                'download_link' => true,
            ])
            ->add('name', TextType::class)
            ->add('address', TextareaType::class)
            ->add('description', TextareaType::class, [
                'required' => true,
                'attr' => ['rows' => 6],
            ])            
            ->add('price', MoneyType::class, [
                'currency' => 'USD',
                'required' => false,
            ])
            ->add('rating', NumberType::class, [
                'required' => false,
                'scale' => 1,
            ])
            ->add('latitude', NumberType::class, [
                'required' => false,
                'scale' => 4,
            ])
            ->add('longitude', NumberType::class, [
                'required' => false,
                'scale' => 4,
            ])                        
            ->add('categories', EntityType::class, [
                'class' => 'CoreBundle:Category',
                'multiple' => true,
                'required' => false,
            ])
            ->add('isPublished', CheckboxType::class, [
                'required' => false,
            ])
            ->add('isFeatured', CheckboxType::class, [
                'required' => false,
            ])
            ->add('isVerified', CheckboxType::class, [
                'required' => false,
            ])

            ->add('save', SubmitType::class, [
                'attr' => ['class' => 'btn-primary'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'user' => null,
            'data_class' => 'Explorer\CoreBundle\Entity\Listing',
        ]);
    }
}