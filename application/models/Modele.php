<?php
  if (!defined('BASEPATH')) exit('No direct script access allowed');

  class Modele extends CI_Model{
  	function __construct(){
  		parent::__construct();
  		$this->load->database();
  	}

    function loginUser($nom, $mdp){
      $mdpCrypter = sha1($mdp);
      $rep = false;
      
      $this->db->select('count(*) as nb');
  		$this->db->where('nom', $nom);
  		$this->db->where('mdp', $mdpCrypter);
      $query = $this->db->get('user');

      $res = $query->result();

      foreach ($res as $item) {
        $resultReq = $item->nb;
      }

      if ($resultReq == 1) {
        $rep = true;
      }

      return $rep;
    }
  }
?>
