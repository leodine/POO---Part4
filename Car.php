<?php

  // Car.php

require_once 'Vehicle.php';

class Car extends Vehicle
{

    const ALLOWED_ENERGIES = ['fuel','electric'];

    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;
    
    /**
     * @var bool
     */
    private $hasParkBrake;
    

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }
    
    public function setParkBrake(): Car
    {
    	if ($this->hasParkBrake === true)
    	{
    		$this->hasParkBrake=false;	
    	}
    	else
    	{
    		$this->hasParkBrake=true;
    	}
    	return $this;
    }
    
    public function getParkBrake(): bool
    {
    	return $this->hasParkBrake;
    }
    
    public function start()
    {
    	if ($this->hasParkBrake === true) {
          throw new Exception("ParkBrake on!!");
   	}
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
        $this->energy = $energy;
    	}
    	return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): Car
    {
        $this->energyLevel = $energyLevel;
        return $this;
    }
}
  
  ?>
