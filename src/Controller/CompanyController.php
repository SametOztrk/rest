<?php

namespace App\Controller;

use App\Entity\Company;
use App\Entity\Customer;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class CompanyController extends AbstractController
{
    
    /**
     * @Route("/", name="companyCreate")
     */
    public function createCustomer()
    {
    	
    	$company = new Company();
        $company->setTitle('A');
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($company);
        $entityManager->flush();

        return new Response("basarılı");

    }
}
