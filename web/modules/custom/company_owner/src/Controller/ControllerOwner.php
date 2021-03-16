<?php
namespace Drupal\company_owner\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\node\Entity\Node;
use Drupal\user\Entity\User;


use Drupal\Core\Entity\EditorialContentEntityBase;
//use Drupal\file\Entity\File;
use Drupal\media\MediaInterface;
use Drupal\media\Entity\Media;
use Drupal\media\Entity;

class ControllerOwner extends ControllerBase {

    public function edit() {
        //return [
            //'#markup' => 'editing',
        //];


        $company_data = $this->getUserInfo();
        $userCompany = $company_data['company'];
        $userName = $company_data['username'];
        $companyId = $company_data['companyId'];
        $companyName = $company_data['company'];
        $companyDescription = $company_data['description'];

        return new \Symfony\Component\HttpFoundation\RedirectResponse("/node/$companyId/edit");


        //This return it's just a example data array to play with twig templates
        return array(
            '#theme' => 'owner_editing_theme',
            '#data' => [
                'id' => $companyId,
                'title' => 'Mi empresa',
                'company' => $companyName,
                'description' => $companyDescription,
                //'imgSrc' => ''
                //'data1' => 'algo que no es default'
                
            ] 
        ); 
    }

   public function getUserInfo() {
        $userid = User::load(\Drupal::currentUser()->id());
        $user = User::load(\Drupal::currentUser()->id());
        $username = $user->get('name')->value;
        $user_company_id = $user->field_propietario_empresa->getValue()[0]['target_id'];

        $companyNode = \Drupal\node\Entity\Node::load($user_company_id);
        $company_description = $companyNode->field_descripcion_de_la_empresa->value;
        //var_dump($company_descripcion);
        $company_logo = $companyNode->field_company_thumbnail->getValue()[0]['target_id'];

        
        if(empty($companyNode)) return;

        $companyTitle = $companyNode->get('title')->value;
        //$companyName = $coma
        
        return [
            'company' => $companyTitle, 
            'username' => $username, 
            'companyId' => $user_company_id, 
            'logo' => $company_logo, 
            'description'=> $company_description
        ];
    }



}
