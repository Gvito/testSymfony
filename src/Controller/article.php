<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Article;
use App\Service\SwearCleaner;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class article
{
     /**
     * @Route("/article/{id}", name="singleView", requirements={"id"="\d+"})
     */
    public function single($id = 1, SwearCleaner $swearCleaner)
    {
       $repository = $this->getDoctrine()->getRepository(Article::class);
       $article = $repository->find($id);
       if (!$article) {
        throw $this->createNotFoundException("L'article que vous cherchez n'existe pas");
       }
       $article = $swearCleaner->cleanSwear($article);
       return $this->render("article/single.html.twig", ["article" => $article]);
    }

}
