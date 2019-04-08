<?php
class PersonnagesManager
{
  private $db;

  public function __construct($db)
  {
    $this->db = $db;
  }

  public function add(Personnage $perso)
  {
    $sql = $this->db->prepare('INSERT INTO personnages(nom) VALUES(:nom)');
    $sql->bindValue(':nom', $perso->nom());
    $sql->execute();
  }

  public function delete(Personnage $perso)
  {
    $sql = $this->db->exec('DELETE FROM personnages WHERE id='. $perso->id());
  }

  public function select(Personnage $perso)
  {

  }

  public function modify(Personnage $perso)
  {

  }

  public function count()
  {

  }

  public function if_exist(Personnage $perso)
  {

  }

  public function getList($nom)
  {

  }

  public function setDb(PDO $db)
  {
    $this->db = $db;
  }


}
?>
