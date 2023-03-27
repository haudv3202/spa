<?php
namespace App\admin\controllers;
use App\controllers\BaseController;
use App\models\BlogService;
use App\models\contact;

class ContactController extends BaseController{
    public function listContact(){
        $contact = contact::GetAll();
        $this->render('admin.UserDisplay.lienHe.list', compact('contact'));
    }
   public function deleteContact($id){
       contact::delete($id);
       header('location: '.route('contact-list'));
   }
}
?>
