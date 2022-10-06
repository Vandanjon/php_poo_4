<?php
class Vehicle
{
    //properties
    protected string $color;
    protected int $currentSpeed = 0;
    protected int $nbSeats = 1;
    protected int $nbWheels = 2;

    //methods
    public function __construct(string $color, int $nbSeats)
    {
        $this->nbSeats = $nbSeats;
        $this->color = $color;
    }

    public function forward(): string
    {
        $this->currentSpeed = 15;

        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    //getters
    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    //setters
    public function setCurrentSpeed(int $currentSpeed): void
    {
        if ($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function setNbSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }

    public function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }
}