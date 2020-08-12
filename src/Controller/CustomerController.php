<?php

namespace App\Controller;

use App\Entity\Customer;
use App\Entity\Orders;

use Doctrine\Common\Collections\ArrayCollection;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;


class CustomerController extends AbstractController
{
   
  /**
 	* @Route("/show", name="show")
  */
	public function show()
	{
	    
		$em = $this->getDoctrine()->getManager();

		$customer = $em->getRepository(Customer::class)->findAll();

		return $this->render('customer/index.html.twig', array('customers'=>$customer));

	    
	}

	/**
 	 * @Route("/add", name="add_customer", methods={"POST"})
  	*/
	public function addCustomer(Request $request)
	{
			
		$serializer= $this->get('serializer');
		$customers = $serializer->deserialize($request->getContent(), Customer::class, 'json');

		$em = $this->getDoctrine()->getManager();
		$em->persist($customers);
		$em->flush();

		return $this->json($customers);

	}


	/**
 	 * @Route("/customer", name="all_customer", methods={"GET"})
  	*/
	public function index( Request $request)
	{
		$repository = $this->getDoctrine()->getRepository(Customer::class);
		$cust = $repository->findAll();

		return $this->json([

			"data" => array_map(function( Customer $customer)
			{

				return [
						"name" => $customer->getName(),
						"company"=>$customer->getCompany(),
						"id"=>$customer->getId()
				];
			},$cust)


			]);
	}


	/**
	* @Route("/customer/{id}", name="customer_by_id",  methods={"GET"})
	*/
	public function getById($id)
	{

		$repository = $this->getDoctrine()->getRepository(Customer::class);
		$cust = $repository->find($id);
	
		return $this->json($cust);

	}

	/**
	* @Route("/customer/delete/{id}", name="delete_ustomer_by_id",  methods={"DELETE"})
	*/
	
	public function destroy(Customer $customer)
	{
		$em = $this->getDoctrine()->getManager();

		$em->remove($customer);
		$em->flush();

		return $this->json(null,204);

	}


}