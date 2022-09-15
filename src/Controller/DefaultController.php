<?php

namespace Panwa\SiteCoreBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class DefaultController
{
    public function index(int $max): Response
    {
        $number = random_int(0, $max);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}