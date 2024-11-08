<?php
require_once __DIR__ . '/../modele/User.php';
require_once __DIR__ . '/../modele/UserDAO.php';

class SupprimerUnUtilisateur
{
  private $DAO;
  private $user;

  public function __construct($user)
  {
    $this->user = $user;
    $this->DAO = new JoueurDAO();
  }

  public function execute()
  {
    $this->DAO->delete($this->user);
  }
}
?>
