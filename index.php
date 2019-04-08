<?php

require 'tableau.php';

class Personnage
{
  private $id;
  private $name;
  private $degats;

  public function __construct($id, $name, $degats)
  {

  }

  public function frapper(Personnage $perso)
  {

  }
  public function recevoir()
  {

  }

  public function id()
  {
    return $this->id;
  }

  public function name()
  {
    return $this->name;
  }

  public function degats()
  {
    return $this->degats;
  }

  public function setId($id)
  {
    $id = (int) $id;

    if(id > 0)
    {
      $this->id = $id;
    }
  }

  public function setDegats($degats)
  {
    $degats = (int) $degats;

    if ($degats > 0 && $degats < 100)
    {
      $this->degats = $degats;
    }
  }


  public function setName($name)
  {
    if(is_string($name))
    {
      $this->name = $name;
    }
  }

  public function hydrate(array $donnees)
  {
      foreach ($donnees as $key => $value) {
        $method = 'set'.ucfirst(key);

        if(method_exists($this, $method))
        {
          $this->method($value);
        }
      }

  }

}



?>
