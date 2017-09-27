<?php
/**
 * Created by PhpStorm.
 * User: fbicia
 * Date: 2017/9/26
 * Time: 下午2:32
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AngeboteController extends Controller
{
    /**
     * @Route("/angebote", name="angeboteInfo")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/angeboteInput.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}
