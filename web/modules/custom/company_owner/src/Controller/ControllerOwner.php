<?php
namespace Drupal\company_owner\Controller;
use Drupal\Core\Controller\ControllerBase;
use Drupal\node\Entity\Node;
use Drupal\user\Entity\User;
use Drupal\file\Entity\File;
use Drupal\media\Entity\Media;
use Drupal\media\Entity;

class ControllerOwner extends ControllerBase {

    public function edit() {
        //return [
            //'#markup' => 'editing',
        //];

        $data = $this->getUserInfo();
        $userCompany = $data['company'];
        $userName = $data['username'];
        $companyId = $data['companyId'];
        $companyName = $data['company'];
        $logoId = $data['logo'];
        //var_dump(Drupal\media\Entity);
        //$logo = \Drupal\media\Entity\Media::load($logoId);
        //$fid = $logo->field_media_image->target_id;
        return new \Symfony\Component\HttpFoundation\RedirectResponse("/node/$companyId/edit");

        return array(
            '#theme' => 'owner_editing_theme',
            '#data' => [
                'title' => 'Mi empresa',
                'company' => $companyName,
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
        //$company_logo = $companyNode->get('field_company_thumbnail')->value;
        $company_logo = $companyNode->field_company_thumbnail->getValue()[0]['target_id'];

        if(empty($companyNode)) return;

        $companyTitle = $companyNode->get('title')->value;
        //$companyName = $coma
        
        return [
            'company' => $companyTitle, 
            'username' => $username, 
            'companyId' => $user_company_id, 
            'logo' => $company_logo, 
        ];
    }



}
