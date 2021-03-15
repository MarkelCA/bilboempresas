<?php
namespace Drupal\company_owner\Controller;

use Drupal\Core\Controller\ControllerBase;
//use Drupal\node\Entity\NodeType;
use Drupal\node\Entity\Node as Node;
use Drupal\user\Entity\User;
class ControllerOwner extends ControllerBase {

    public function edit() {
        //return [
            //'#markup' => 'editing',
        //];

        $data = $this->getUserInfo();
        $userCompany = $data['company'];
        $userName = $data['username'];
        $companyId = $data['companyId'];

        return array(
            '#theme' => 'page1_theme',
            '#data' => [
                'title' => 'Welcome to pro3!',
                'cover_description' => 'Elit dignissimos minus ipsa minima iure voluptatem, enim Pariatur maxime animi qui placeat optio Reprehenderit consequatur iste officiis a sint? Animi quia obcaecati nobis quaerat sit Odio architecto expedita et?',
                'username' => $userName,
                'company' => $userCompany,
                'companyEditUrl' => "/node/$companyId/edit/", 
                //'data1' => 'algo que no es default'
                
            ] 
        ); 

    }

   public function getUserInfo() {
        $userid = User::load(\Drupal::currentUser()->id());
        $user = \Drupal\user\Entity\User::load(\Drupal::currentUser()->id());
        $username = $user->get('name')->value;
        $user_company_id = $user->field_propietario_empresa->getValue()[0]['target_id'];

        $companyNode = \Drupal\node\Entity\Node::load($user_company_id);

        if(empty($companyNode)) return;

        $companyTitle = $companyNode->get('title')->value;
        //$companyName = $coma
        
        //echo 'User Company: <pre>';
        //var_dump($companyTitle);
        //echo '</pre>';
        return [
            'company' => $companyTitle, 
            'username' => $username, 
            'companyId' => $user_company_id, 
        ];
    }



}
