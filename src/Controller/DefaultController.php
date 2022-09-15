<?php

namespace Panwa\SiteCoreBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class DefaultController
{
    public function index(): Response
    {
        $number = 12;

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}