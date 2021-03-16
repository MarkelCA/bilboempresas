<?php
namespace Drupal\company_owner\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\node\Entity\Node;
use Drupal\user\Entity\User;
use Drupal\media\Entity;

class ControllerOwner extends ControllerBase {

    public function edit() {
        $company_data = $this->getCompanyInfo();

        //return new \Symfony\Component\HttpFoundation\RedirectResponse("/node/$companyId/edit");

        return array(
            '#theme' => 'owner_editing_theme',
            '#data' =>  $company_data
        ); 
    }

   public function getCompanyInfo() {
        $user = User::load(\Drupal::currentUser()->id());
        $user_company_id = $user->field_propietario_empresa->getValue()[0]['target_id'];

        $companyNode = \Drupal\node\Entity\Node::load($user_company_id);
        $fields = array_keys($companyNode->getFieldDefinitions());
        foreach($fields as $field){
            $companyFields[$field] = $companyNode->$field->value;
        }

        //echo"<pre>".print_r($companyFields, true)."</pre>";

        
        if(empty($companyNode)) return;
        
        return $companyFields;
   }



}
