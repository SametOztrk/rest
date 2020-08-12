<?php

namespace App\Entity;

use App\Repository\OrdersRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OrdersRepository::class)
 */
class Orders
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     *@ORM\Column(type="integer")
    */
    private $quantity;

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity($quantity): ?int
    {
        $this->quantity =$quantity;
    }

    /**
     *@ORM\Column(type="string")
    */
    private $adress;

    public function getAdress()
    {
        return $this->adress;
    }

    public function setAdress($adress)
    {
        $this->adress =$adress;
    }

    /**
     *@ORM\Column(type="string")
    */
    private $shippingDate;

    public function getDate()
    {
        return $this->shippingDate;
    }

    public function setDate($shippingDate)
    {
        $this->shippingDate =$shippingDate;
    }


    
}
