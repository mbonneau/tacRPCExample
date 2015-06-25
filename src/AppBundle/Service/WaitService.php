<?php


namespace AppBundle\Service;


use Voryx\ThruwayBundle\Annotation\Register;

class WaitService {
    private $mailer;

    function __construct($mailer)
    {
        $this->mailer = $mailer;
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