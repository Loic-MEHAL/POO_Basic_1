<?php

class Car
{
  private $nbWheels = 4;
  private $currentSpeed;
  private $color;
  private $nbSeats = 5;
  private $energy;
  private $energyLevel;

  public function __construct(string $color, int $nbSeats, string $energy)
  {
    $this->color = $color;
    $this->nbSeats = $nbSeats;
    $this->energy =$energy;
  }

  // démarrer
  public function forward()
  {
      $this->currentSpeed = 0;

      return "Go !";
  }
  // accelère et affiche la boucle
  public function moreFast(): string
  {
    $sentence = "";
      while ($this->currentSpeed <= 130) {
        $this->currentSpeed+= 15;
        $sentence .= "More Fast !!!";
      }
    $sentence .= "I can't faster !";
    return $sentence;
  }

  // freine et affiche la boucle
  public function brake(): string
  {
    $sentence = "";
      while ($this->currentSpeed > 0) {
        $this->currentSpeed-= 15;
        $sentence .= "Brake !!!";
      }
    $sentence .= "I'm stopped !";
    return $sentence;
  }

  public function getColor(): string
  {
    return $this->color;
  }

  public function setColor(string $color): void
  {
    $this->color =$color;
  }

  public function getCurrentSpeed(): int
  {
    return $this->currentSpeed;
  }

  public function setCurrentSpeed(int $currentSpeed): void
  {
    if($currentSpeed >= 0){
      $this->currentSpeed = $currentSpeed;
    }
  }

  public function getNbWheels(): string
  {
    return $this->nbWheels;
  }

  public function setNbWheels(string $nbWheels): void
  {
    $this->nbWheels =$nbWheels;
  }

  public function getNbSeats(): string
  {
    return $this->nbSeats;
  }
  public function setNbSeats(string $nbSeats): void
  {
    $this->nbSeats =$nbSeats;
  }
  public function getEnergyLevel(): string
  {
    return $this->energyLevel;
  }
  public function setEnergyLevel(string $energyLevel): void
  {
    $this->energyLevel =$energyLevel;
  }
  public function getEnergy(): string
  {
    return $this->energy;
  }
  public function setEnergy(string $energy): void
  {
    $this->energy =$energy;
  }
}

 ?>
