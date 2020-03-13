<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PersonsRepository")
 */
class Persons
{
    public static $expectedCostList = array(
        0 => '0-10 tyś.',
        1 => '10-50 tyś.',
        2 => '50-100 tyś.',
    );

    public static $travelTypeList = array(
        '0' => 'w dwie strony',
        '1' => 'tylko Mars',
    );

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $first_name;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $last_name;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $email;

    /**
     * @ORM\Column(type="integer")
     */
    private $expected_cost;

    /**
     * @ORM\Column(type="integer")
     */
    private $travel_type;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $comments;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->first_name;
    }

    public function setFirstName(string $first_name): self
    {
        $this->first_name = $first_name;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->last_name;
    }

    public function setLastName(string $last_name): self
    {
        $this->last_name = $last_name;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getExpectedCost($string = false)
    {
        if($string)
            return self::$expectedCostList[$this->expected_cost];
        return $this->expected_cost;
    }

    public function getExpectedCostValue(): ?string
    {
        return self::$expectedCostList[$this->expected_cost];
    }

    public function setExpectedCost(int $expected_cost): self
    {
        $this->expected_cost = $expected_cost;

        return $this;
    }

    public function getTravelType($string = false)
    {
        if($string)
            return self::$travelTypeList[$this->travel_type];

        return $this->travel_type;
    }

    public function getTravelTypeValue(): ?string
    {
        return self::$travelTypeList[$this->travel_type];
    }

    public function setTravelType(int $travel_type): self
    {
        $this->travel_type = $travel_type;

        return $this;
    }

    public function getComments(): ?string
    {
        return $this->comments;
    }

    public function setComments(?string $comments): self
    {
        $this->comments = $comments;

        return $this;
    }
    
}
