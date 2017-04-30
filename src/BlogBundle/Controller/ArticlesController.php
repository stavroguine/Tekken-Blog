<?php
// src/Blogger/BlogBundle/Controller/BlogController.php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ArticlesController extends Controller
{
    /**
     * Show a blog entry
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $blog = $em->getRepository('BlogBundle:Articles')->find($id);

        if (!$blog) {
            throw $this->createNotFoundException('Unable to find Blog post.');
        }

        $comments = $em->getRepository('BlogBundle:Comment')
               ->getCommentsForBlog($blog->getId());

        return $this->render('BlogBundle:articles:show.html.twig', array(
            'blog'      => $blog,
            'comments'  => $comments
        ));
    }
}
