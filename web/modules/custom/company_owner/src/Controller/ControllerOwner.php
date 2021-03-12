<?php
namespace Drupal\company_owner\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\user\Entity\User;
class ControllerOwner extends ControllerBase {

    public function edit() {
        //return [
            //'#markup' => 'editing',
        //];

        return array(
            '#theme' => 'page1_theme',
            '#data' => [
                'title' => 'Welcome to pro3!',
                'cover_description' => 'Elit dignissimos minus ipsa minima iure voluptatem, enim Pariatur maxime animi qui placeat optio Reprehenderit consequatur iste officiis a sint? Animi quia obcaecati nobis quaerat sit Odio architecto expedita et?',
                'user_id' => $this->getUserCompany()['company'],
                'username' => $this->getUserCompany()['username'],
                //'data1' => 'algo que no es default'
                
            ] 
        ); 

    }

   public function getUserCompany() {
        $user = \Drupal::currentUser();
        $userid = User::load(\Drupal::currentUser()->id());
        $user = \Drupal\user\Entity\User::load(\Drupal::currentUser()->id());
        $username = $user->get('name')->value;
        $name = $user->get('field_propietaro_de_empresa')->value;
        return [
            'company' => $name, 
            'username' => $username, 
        ];
    }

}
