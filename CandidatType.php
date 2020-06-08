<?php

namespace App\Form;

use App\Entity\Candidat;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CandidatType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomcandidat')
            ->add('prenomcandiat')
            ->add('mailcandidat')
            ->add('telephonecandidat')
            ->add('adressecandidat')
            ->add('datenaissancecandidat', DateType::class ,['format' => 'yyyy-MM-dd',])
            ->add('mdpcandidat')
            //mapped => false (n'est pas lié a la BD) //
            ->add('images', FileType::class, [
                'label' => false,
                'mapped' => false,
                'required' => false
                ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Candidat::class,
        ]);
    }
}
