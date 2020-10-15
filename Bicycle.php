<?php

class Bicycle
{
  private $color;
  private $currentSpeed;
  private $nbSeats = 1;
  private $nbWheels = 1;

  public function __construct(string $color)
  {
    $this->color = $color;
  }


  // retourne la couleur
  public function getColor(): string
  {
    return $this->color;
  }
  // applique la couleur a $color
  public function setColor(string $color): void
  {
    $this->color =$color;
  }
  // récupère la vitesse actuelle
  public function getCurrentSpeed(): int
  {
    return $this->currentSpeed;
  }
  // applique la vitesse a $currentSpeed
  public function setCurrentSpeed(int $currentSpeed): void
  {
    if($currentSpeed >= 0){
      $this->currentSpeed = $currentSpeed;
    }
  }
  // avance
  public function forward()
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

}

 ?>
