<?php

namespace FrontendBundle\Controller;

use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use FrontendBundle\Form\NewsLetterType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction(Request $request)
    {
        $newsLetterForm = $this->createForm(NewsLetterType::class);

        if ($request->getMethod() == 'POST') {
            $newsLetterForm->handleRequest($request);
            if ($newsLetterForm->isValid()) {
                $em = $this->getDoctrine()->getEntityManager();
                $newsLetter = $newsLetterForm->getData();
                try {
                    $em->persist($newsLetter);
                    $em->flush($newsLetter);
                } catch (UniqueConstraintViolationException $e) {}
            }
        }

        return $this->render('FrontendBundle:Default:index.html.twig', ['newsLetterForm' => $newsLetterForm->createView()]);
    }
}
