<?php

namespace RegistroBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;




class FormType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre', 'Symfony\Component\Form\Extension\Core\Type\TextType',array(
                'label'=>'*Nombre(s)',
                'required'=>true,
            ))
            ->add('paterno', 'Symfony\Component\Form\Extension\Core\Type\TextType',array(
                'label'=>'*Apellido Paterno',
                'required'=>true,

            ))
            ->add('materno', 'Symfony\Component\Form\Extension\Core\Type\TextType',array(
                'label'=>'*Apellido Materno',
                'required'=>true,

            ))
            ->add('sexo', 'Symfony\Component\Form\Extension\Core\Type\ChoiceType', array(
                'choices'   => array(
                    true => 'Masculino',
                    false => 'Femenino'),
                'expanded' => true,
                'multiple' => false,
                'required'  => true,
                'choices_as_values' => false,


            ))
            ->add('mail', 'Symfony\Component\Form\Extension\Core\Type\TextType',array(
                'label'=>'*Correo electrónico',
                'required'=>true,

            ))
            ->add('nacimiento','Symfony\Component\Form\Extension\Core\Type\DateType',array(
                'placeholder' => array(
                    'year' => 'Año',
                    'month' => 'Mes',
                    'day' => 'Día'),
                'years'=> range(1980,2000),
                'label'=>'*Fecha de nacimiento',
                'required'=>true,

            ))

            ->add('tel','Symfony\Component\Form\Extension\Core\Type\TextType',array(
                'label'=>'*Teléfono para comunicarse en caso de emergencia (con lada)',
                'required'=>true,

            ))

            ->add('procedencia', 'Symfony\Component\Form\Extension\Core\Type\TextType',array(
                'label'=>'*Universidad de Procedencia',
                'required'=>true,

            ))
            ->add('carrera','Symfony\Component\Form\Extension\Core\Type\TextType',array(
                'label'=>'*Carrera',
                'required'=>true,

            ))
            ->add('semestre', 'Symfony\Component\Form\Extension\Core\Type\TextType',array(
                'label'=>'*Semestre o cuatrimestre',
                'required'=>true,

            ))
            ->add('porcentaje', 'Symfony\Component\Form\Extension\Core\Type\ChoiceType',array(
                'label'=>'*Porcentaje de avance (hasta marzo 2017)',
                'choices'=>array(
                    '50'=>'50',
                    '60'=>'60',
                    '70'=>'70',
                    '80'=>'80',
                    '90'=>'90',
                    '100'=>'100'),
                'placeholder'=>'Seleccionar',
                'required'=>true,
                'choices_as_values' => true,
            ))

            ->add('promedio', 'Symfony\Component\Form\Extension\Core\Type\ChoiceType',array(
                'label'=>'*Promedio',
                'choices'=>array(
                    '8'=>'8.0',
                    '8.1'=>'8.1',
                    '8.2'=>'8.2',
                    '8.3'=>'8.3',
                    '8.4'=>'8.4',
                    '8.5'=>'8.5',
                    '8.6'=>'8.6',
                    '8.7'=>'8.7',
                    '8.8'=>'8.8',
                    '8.9'=>'8.9',
                    '9.0'=>'9.0',
                    '9.1'=>'9.1',
                    '9.2'=>'9.2',
                    '9.3'=>'9.3',
                    '9.4'=>'9.4',
                    '9.5'=>'9.5',
                    '9.6'=>'9.6',
                    '9.7'=>'9.7',
                    '9.8'=>'9.8',
                    '9.9'=>'9.9',
                    '10.0'=>'10.0'),
                'placeholder'=>'Seleccionar',
                'required'=>true,
                'choices_as_values' => true,

            ))
            ->add('profesor', 'Symfony\Component\Form\Extension\Core\Type\TextType',array(
                'label'=>'*Nombre del profesor que lo recomienda',
                'required'=>true,

            ))
            ->add('univprofesor', 'Symfony\Component\Form\Extension\Core\Type\TextType',array(
                'label'=>'*Universidad del profesor',
                'required'=>true,

            ))
            ->add('mailprofesor', 'Symfony\Component\Form\Extension\Core\Type\TextType',array(
                'label'=>'*Correo del profesor (para solicitar carta de recomendación)',
                'required'=>true,

            ))
            ->add('historialFile', 'vich_file', array(
                'required'=> true,
                'label' => 'Historial académico'
            ))

            ->add('cartaFile', 'vich_file', array(
                'required' => false,
                'label' => 'Carta de recomendación'
            ))

            ->add('participado', 'Symfony\Component\Form\Extension\Core\Type\ChoiceType', array(
                'choices'=>array(
                    true=>'Si ',
                    false=>'No '),
                'expanded'=>true,
                'required'=>true,
                'label'=>'*¿Ha participado en alguna Escuela de Verano o algún evento similar anteriormente? (no necesariamente en Morelia)',
                'choices_as_values' => false,

            ))
            ->add('evento', 'Symfony\Component\Form\Extension\Core\Type\TextareaType',array(
                'label'=>'En caso afirmativo, escriba el año, el nombre del evento y el lugar:',
                'required'=>false,
            ))
            ->add('beca', 'Symfony\Component\Form\Extension\Core\Type\ChoiceType', array(
                'label'=>'*Beca',
                'choices'=>array(
                    'Solamente alimentación'=>'Solamente alimientación',
                    'Solamente hospedaje'=>'Solamente hospedaje',
                    'Hospedaje y alimentación'=>'Hospedaje y alimentación',
                    'Ninguno'=>'Ninguno'),
                'placeholder' => 'Seleccionar',
                'choices_as_values' => true,

            ))
            ->add('razones', 'Symfony\Component\Form\Extension\Core\Type\TextareaType',array(
                'label'=>'*Razones por las que desea entrar a la escuela',
                'required'=>true,

            ))
            ->add('comentarios', 'Symfony\Component\Form\Extension\Core\Type\TextareaType',array(
                'label'=>'Comentarios',
                'required'=>false,

            ))
            ->add('recomendacion', 'Symfony\Component\Form\Extension\Core\Type\TextareaType',array(
                'label'=>'Recomendación',
                'required'=>false,

            ))
            ->add('examen', 'Symfony\Component\Form\Extension\Core\Type\ChoiceType', array(
                'choices'   => array(
                    true => 'Si',
                    false => 'No'),
                'expanded' => true,
                'multiple' => false,
                'required'  => true,
                'choices_as_values' => false,

            ))
            ->add('confirmado', 'Symfony\Component\Form\Extension\Core\Type\ChoiceType', array(
                'choices'=>array(
                    true=>'Si',
                    false=>'No'),
                'expanded'=>true,
                'required'=>false,
                'placeholder'=>false,
            ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'RegistroBundle\Entity\Form'
        ));
    }


}
