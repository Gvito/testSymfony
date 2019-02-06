<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class accueil
{
     /**
     * @Route("/accueil")
     */
    public function accueilView()
    {
        $number = "Hello World";
        return new Response(
            '<html><body> '.$number.'</body></html>'
        );
    }

}
