<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{
    //constants
    public const  ALLOWED_ENERGIES = [
        'fuel',
        'electric'
    ];

    //properties
    protected string $energy;
    protected int $energyLevel;
    protected bool $hasParkBrake;

    //methods
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function start(): string
    {
        if ($this->getHasParkBrake() === true) {
            throw new Exception('WARNING : Park brake on');
        } else {
            $this->currentSpeed = 15;
            return 'It\'s started !';
        }
    }

    //getters
    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function getHasParkBrake(): bool
    {
        return $this->hasParkBrake;
    }

    //setters
    public function setEnergyLevel(int $energyLevel)
    {
        $this->energyLevel = $energyLevel;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function setHasParkBrake(bool $hasParkBrake): void
    {
        $this->hasParkBrake = $hasParkBrake;
    }
}