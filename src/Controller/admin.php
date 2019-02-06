<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class admin
{
     /**
     * @Route("/admin")
     */
    public function adminView()
    {
        $number = "Hello World, it's admin view";
        return new Response(
            '<html><body> '.$number.'</body></html>'
        );
    }
     /**
     * @Route("/admin/article")
     */
    public function adminArticleView()
    {
        $number = "Hello World, it's admin article view";
        return new Response(
            '<html><body> '.$number.'</body></html>'
        );
    }
     /**
     * @Route("/admin/article/add")
     */
    public function addArticle()
    {
        $number = "Hello World, it's a addArticle page";
        return new Response(
            '<html><body> '.$number.'</body></html>'
        );
    }

}
