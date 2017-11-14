<?php

namespace FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use BackendBundle\Entity\User;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class LoginController extends Controller


{
  /**
   * @Route("/login", name="login")
   */
   public function login()
   {
$user = new User;
$form = $this->createFormBuilder($user)
->add('username', TextType::class,array('label' => 'User Name','attr'=> array('class'=>'form-control')))
->add('password', PasswordType::class,array('label' => 'Passwoed','attr'=> array('class'=>'form-control')))
->add('save', SubmitType::class,array('label' => 'Login','attr'=> array('class'=>'form-control')))
->getForm();
  return $this->render('FrontendBundle::Default/login.html.twig', array(
 'myform' => $form->createview(),
));
   }
}
