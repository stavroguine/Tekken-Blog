<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()
           ->getEntityManager();

           $blogs = $em->getRepository('BlogBundle:Articles')
                    ->getLatestBlogs();

        return $this->render('BlogBundle::index.html.twig', array(
            'blogs' => $blogs
        ));
    }
}
