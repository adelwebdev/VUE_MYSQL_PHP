<!-- le models c tt ce qui atrait à notre sql (tt contacte entre notre application et sql) -->
<!-- on appelle d'abord la config à la db ; ce que on a configuré avant dans database.php (voir database.php) -->
<!-- on crée une nouvelle class (ici Wines), on appele la variable pdo: dès qu'on dira: $this->pdo, ca sera appele à la db -->
<!-- dans cette class il y la fct list (quand on instancie Wines on pourra appeler list) list qui est une query à la pdo (ça retourne une fct list) -->
<!-- mainteant on veut interpréter cette list en JavaScript pour ça on va dans controllers et dans getData.php -->

<?php

require_once (dirname(__DIR__) . '/config/database.php');

class Wines 
{
  protected $pdo;

  public function __construct()
  {
    $this->pdo = getPdo();
  }
  
  public function list()
  {
    $sql = $this->pdo->query("
      SELECT * 
      FROM wines 
      ORDER BY publish_date 
      DESC
    ");
    $sql->setFetchMode(\PDO::FETCH_ASSOC);

    return $sql;
  }
}
