<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class HelloController
 * @author yourname
 */
class HelloController extends Controller
{
  /**
   * undocumented function
   *
   * @Route("/")
   * @return void
   */
  public function helloAction()
  {
    return new Response('Hello World!');
  }

  /**
   * undocumented function
   *
   * @Route("hello/{name}")
   * @return void
   */
  public function hellodynamicAction($name)
  {
    return new Response("Hello World! $name");
  }
  
  /**
   * undocumented function
   *
   * @Route("lucky/number/{count}")
   * @return void
   */
  public function numberAction($count)
  {
    $mytitle = "$count numbers";
    $numbers = array();

    for ($i = 0; $i < $count; $i++) {
      $numbers[$i] = rand(0,100);
    }

    $numbersList = implode(', ', $numbers);

    $html = $this->container->get('templating')->render('lucky/number.html.twig',
      array('luckyNumbersList' => $numbersList,
    'title' => $mytitle)
    );

    return new Response($html);

  }
  
  
}
