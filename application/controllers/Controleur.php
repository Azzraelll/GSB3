<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  class Controleur extends CI_Controller{
    public function index(){
      $this->load->helper('email');
      $this->load->helper('form');
      $this->load->view('Accueil');
    }
    public function login(){
      $this->form_validation->set_rules('nom', 'Nom', 'required');
      $this->form_validation->set_rules('mdp', 'Mot de passe', 'required');

      if($this->form_validation->run() == TRUE) {
        // récuperer les variables du formulaire
        $nom = $this->input->post('nom');
        $mdp = $this->input->post('mdp');
        $this->load->model('Modele');
        if ($this->Monmodele->loginUser($nom, $mdp)) {
          $this->load->view('vue apres la verif de la connexion');
        }
        else {
          $this->load->view('Accueil');
        }

  		}
    }
  }
?>
