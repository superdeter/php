<?php
class Personnage
{
  private $id;
  private $nom;
  private $degats;

  const CEST_MOI = 1;
  const PERSONNAGE_TUE = 2;
  const PERSONNAGE_FRAPPE = 3;

  public function __construct(array $donnees)
  {
    $this->hydrate($donnees);
  }

  public function frapper(Personnage $perso)
  {
    // Fonction qui permet de frapper un autre perso

    if($perso->id == $this->id)
    {
      return self::CEST_MOI;
    }

    return $perso->recevoir();
  }

  public function recevoir()
  {
    // Fonction qui permet de recevoir des degats

    $this->degats += 5;

    if ($this->degats >= 100)
    {
      return self::PERSONNAGE_TUE;
    }

    return self::PERSONNAGE_FRAPPE;

  }

  public function id()
  {
    return $this->id;
  }

  public function nom()
  {
    return $this->nom;
  }

  public function degats()
  {
    return $this->degats;
  }

  public function setId($id)
  {
    $id = (int) $id;

    if (valeur > 0)
    {
      $this->$id = id;
    }
  }

  public function setNom($nom)
  {
    if (is_string($nom))
    {
      $this->nom = $nom;
    }
  }

  public function setDegats($degats)
  {
    $degats = (int) $degats;

    if($degats > 0 && $degats < 100)
    {
      $this->degats = $degats;
    }
  }

  public function hydrate(array $donnees)
  {
    foreach($donnees as $key => $value)
    {
      $method = "set".ucfirst($key);

      if(method_exists($this, $method))
      {
        $this->method($value);
      }
    }
  }
}
?>
