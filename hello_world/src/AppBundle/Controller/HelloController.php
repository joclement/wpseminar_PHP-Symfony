<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloController extends Controller
{

	/**
	 * @Route("/", name="default") 
	 */
	public function defaultAction()
	{
		return new Response('<html><body>Hallo liebe Zuhoerer!</body></html>');
	}

	/**
	 * @Route("/hello/{name}", name="helloname")
	 */
	public function helloAction($name)
	{
		return new Response('<html><body>Hallo '.$name.'! Viel Spass!</body></html>');
	}

	/**
	 * @Route("/{name}", name="name")
	 */
	public function listenAction($name)
	{
		return new Response('<html><body>'.$name.'! Ich bitte dich zuzuhoeren!</body></html>');
	}


	/**
	 * @Route("/lucky/number/{count}")
	 */
	public function numberAction($count)
	{
    $mytitle = "$count numbers";
		$numbers = array();
		for ($i = 0; $i < $count; $i++) {
			$numbers[$i] = rand(0, 100);
		}

		$numbersList = implode(', ', $numbers);


		$html = $this->render(
			'lucky/number.html.twig',
      array('luckyNumberList' => $numbersList,
            'title' => $mytitle)
		);

		return new Response($html);
	}

	/**
	 * @Route("/api/lucky/number")
	 */
	public function apiNumberAction()
	{
		$data = array(
			'lucky_number' => rand(0, 100),
		);

		return new Response(
			json_encode($data),
			200,
			array('Content-Type' => 'application/json')
		);
	}

}
