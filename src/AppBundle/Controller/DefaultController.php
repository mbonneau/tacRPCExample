<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Voryx\ThruwayBundle\Annotation\Register;

class DefaultController extends Controller
{
    /**
     * @Route("/app/example", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }

    /**
     * @Register("com.survos.wait")
     */

    public function wait($seconds=10)
    {
        sleep($seconds);
        return "Waited " . $seconds . " seconds";
    }
}
