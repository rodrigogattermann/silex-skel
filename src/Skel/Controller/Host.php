<?php

namespace Skel\Controller;

use Silex\Application;

class Host
{
    public function host(Application $app)
    {
        var_dump('a');die;
        return $app['twig']->render('index/index.twig');
    }
}
