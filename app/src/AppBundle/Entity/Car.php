<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Tests\Model;

/**
 * Car
 *
 * @ORM\Table(name="car")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CarRepository")
 */
class Car
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;



    /**
     * @var Model
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Make",inversedBy="cars")
     */
    private $make;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="decimal", scale=2)
     */
    private $price;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_fulloption", type="boolean")
     */
    private $is_fulloption;

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return (float) $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = (float) $price;
    }

    /**
     * @return bool
     */
    public function isFulloption(): bool
    {
        return $this->is_fulloption;
    }

    /**
     * @param bool $is_fulloption
     */
    public function setIsFulloption(bool $is_fulloption): void
    {
        $this->is_fulloption = $is_fulloption;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }




    /**
     * Set make
     *
     * @param string $make
     *
     * @return Car
     */
    public function setMake($make)
    {
        $this->make = $make;

        return $this;
    }

    /**
     * Get make
     *
     * @return string
     */
    public function getMake()
    {
        return $this->make;
    }

    /**
     * Get isFulloption
     *
     * @return boolean
     */
    public function getIsFulloption()
    {
        return $this->is_fulloption;
    }


}
