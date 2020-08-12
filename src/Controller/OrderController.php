<?php

namespace App\Controller;

use App\Entity\Orders;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;



class OrderController extends AbstractController
{
  
    /**
 	 * @Route("/addOrder", name="add_order", methods={"POST"})
  	*/
	public function addCustomer(Request $request)
	{
			
		$serializer= $this->get('serializer');
		$orders = $serializer->deserialize($request->getContent(), Orders::class, 'json');

		$em = $this->getDoctrine()->getManager();
		$em->persist($orders);
		$em->flush();

		return $this->json($orders);

	}


	/**
 	 * @Route("/order", name="all_orders", methods={"GET"})
  	*/
	public function index( Request $request)
	{
		$repository = $this->getDoctrine()->getRepository(Orders::class);
		$order = $repository->findAll();

		return $this->json([

			"data" => array_map(function( Orders $order)
			{

				return [

						"id"=>$order->getId(),
						"quantity"=>$order->getQuantity(),
						"adress"=>$order->getAdress(),
						"shipping_date"=>$order->getShippingDate()
				];
			},$order)


			]);
	}


	/**
	* @Route("/order/{id}", name="order_by_id",  methods={"GET"})
	*/
	public function getById($id)
	{

		$repository = $this->getDoctrine()->getRepository(Orders::class);
		$order = $repository->find($id);
	
		return $this->json($order);

	}

	/**
	* @Route("/order/delete/{id}", name="order_ustomer_by_id",  methods={"DELETE"})
	*/
	
	public function destroy(Orders $order)
	{
		$em = $this->getDoctrine()->getManager();

		$em->remove($order);
		$em->flush();

		return $this->json(null,204);

	}


}
