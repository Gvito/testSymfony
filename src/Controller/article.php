<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class article
{
     /**
     * @Route("/article", requirements={"id"="\d+"})
     */
    public function articleView()
    {
        $number = "Hello World, it's an single";
        return new Response(
            '<html><body> '.$number.'</body></html>'
        );
    }

}
