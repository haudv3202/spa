<?php

namespace App\admin\controllers;

use App\Controllers\BaseController;
use App\models\social;
class socialController extends BaseController
{
    public function index() {
        $alldata = social::GetAll();
        $this->render("admin.UserDisplay.social.listsocial",compact("alldata"));
    }

    public function edit($id) {
        $oneData = social::findOne($id);
        if(isset($_POST['sb-social'])){
            $errors = [];
            if(empty($_POST['link'])){
                $errors[] = 'Bạn cần nhập đường dẫn';
            }

            if(count($errors) > 0) {
                redirect('errors', $errors, 'social-edit/' . $id);
            }else {
                social::updatefind($id,[
                    "link" => $_POST['link']
                ]);
                redirect("success","Cập nhật thành công!",'social-edit/'.$id);
            }

        }
        $this->render("admin.UserDisplay.social.edit",compact("oneData"));
    }
}