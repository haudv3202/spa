<?php

namespace App\admin\controllers;

use App\controllers\BaseController;
use App\models\settings;
class SettingController extends BaseController
{
    public function index(){
        $alldata = settings::GetAll();
        $this->render("admin.UserDisplay.settings.listSettings",compact("alldata"));
    }
    public function edit($id){
        $data = settings::findOne($id);
        if(isset($_POST['sb-setting'])){
            $error = [];
            if(empty($_POST['cate'])){
                $errors[] = 'Bạn cần nhập tên nội dung';
            }

            if(count($error) > 0) {
                redirect('errors', $errors, 'setings-edit/' . $id);
            }else {
                settings::updatefind($id,[
                    "titler" => $_POST['cate']
                ]);
                redirect("success","Cập nhật thành công!",'setings-edit/'.$id);
            }

        }
        $this->render("admin.UserDisplay.settings.edit",compact("data"));
    }

    public function edit_image($id){
        $data = settings::findOne($id);
        if(isset($_POST['sb-setting-image'])){
            $maxsize = 5000000;
            $allowType = ['jpg', 'png', 'jpeg', 'gif', 'JPG', 'PNG', 'JPEG'];
            $target_dir = './public/upload/setting/';
            $name = time() .$_FILES['upload-settings']["name"];
            $target_file = $target_dir . $name;
            $image_old = settings::findOne($id)->titler;
            $errors = [];
            if (empty($_FILES['upload-settings']['name'])) {
                $errors[] = "Image không được bỏ trống";
            }
            if ($_FILES['upload-settings']['size'] > $maxsize) {
                $errors[] = " Ảnh của bạn có dung lượng quá lớn không thể upload";
            }
            if (in_array($target_file, $allowType)) {
                $errors[] = 'Chỉ được upload các định dạng JPG, PNG, JPEG, GIF';
            }

            if(count($errors) > 0) {
                redirect('errors', $errors, 'setings-edit/' . $id);
            }else {
                move_uploaded_file($_FILES['upload-settings']['tmp_name'], $target_file);
                settings::updatefind($id,[
                    "titler" => $name
                ]);
                if (file_exists('./public/upload/setting/'.$image_old)) {
                            unlink('./public/upload/setting/'.$image_old);
                        }
                redirect("success","Cập nhật thành công!",'setings-edit/'.$id);
            }

        }
        $this->render("admin.UserDisplay.settings.edit_image",compact("data"));
    }
}