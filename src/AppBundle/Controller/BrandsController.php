<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BrandsController extends Controller
{
/**
* @Route("/brands", name="brandsInfo")
*/
public function indexAction(Request $request)
{
// replace this example code with whatever you need
return $this->render('default/brandsInput.html.twig', [
'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
]);
}
}
