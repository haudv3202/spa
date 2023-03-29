<?php

namespace App\admin\controllers;

use App\controllers\BaseController;
use App\models\contactUs;
use App\models\insta;
use App\models\promotion;
class UserDisplayController extends BaseController
{
    public function index() {
        $allData = contactUs::GetAll();
        $this->render('admin.UserDisplay.contact.contactUs',compact("allData"));
    }

    public function edit($id){
        $oneData = contactUs::findOne($id);
        $this->render('admin.UserDisplay.contact.editContact',compact('oneData'));
    }

    public function update($id){
        if(isset($_POST['sb-contact'])){
            $maxsize = 5000000;
            $allowType = ['jpg', 'png', 'jpeg', 'gif', 'JPG', 'PNG', 'JPEG'];
            $target_dir = './public/upload/contact_us/';
            $name = time() .$_FILES['logo']["name"];
            $target_file = $target_dir . $name;
            $errors = [];

            if(empty($_POST['content'])){
                $errors[] = 'Bạn cần nhập tên nội dung';
            }
            if(empty($_POST['desribi'])){
                $errors[] = 'Bạn cần nhập tên mô tả';
            }

            $content = $_POST['content'];
            $meta = $_POST['desribi'];
            $img_old = contactUs::findOne($id)->logo;

            if(count($errors) > 0){
                redirect('errors', $errors, 'edit-contact/'.$id);
            }else {
                if(!($_FILES['logo']['name'] == "")) {
                    if (empty($_FILES['logo']['name'])) {
                        $errors[] = "Image không được bỏ trống";
                    }
                    if ($_FILES['logo']['size'] > $maxsize) {
                        $errors[] = " Ảnh của bạn có dung lượng quá lớn không thể upload";
                    }
                    if (in_array($target_file, $allowType)) {
                        $errors[] = 'Chỉ được upload các định dạng JPG, PNG, JPEG, GIF';
                    }

                    if(count($errors) > 0) {
                        redirect('errors', $errors, 'edit-contact/'.$id );
                    }else {
                        move_uploaded_file($_FILES['logo']['tmp_name'], $target_file);
                         contactUs::updatefind($id,[
                            "logo" => $name,
                            "content" => $content,
                            "meta" => $meta
                        ]);
                        if (file_exists('./public/upload/contact_us/'.$img_old)) {
                            unlink('./public/upload/contact_us/'.$img_old);
                        }

                        redirect("success","Cập nhật thành công!",'edit-contact/'.$id);
                    }
                }else {
                    $result = contactUs::updatefind($id,[
                        "logo" => $img_old,
                        "content" => $content,
                        "meta" => $meta
                    ]);

                    if ($result){
                        redirect("success","Cập nhật thành công!",'edit-contact/'.$id);
                    }
                }
            }
        }
    }


    public function insta(){
        $allData = insta::GetAll();
        $this->render('admin.UserDisplay.insta.insta',compact('allData'));
    }

    public function khuyenmai(){
        $allData = promotion::GetAll();
        $this->render('admin.UserDisplay.khuyenmai.khuyenmai',compact('allData'));
    }

    public function editInsta($id) {
        $oneData = insta::findOne($id);
        $this->render('admin.UserDisplay.insta.edit_insta',compact('oneData'));
    }

    public function editkhuyenmai($id) {
        $oneData = promotion::findOne($id);
        if(isset($_POST['sb-poro'])){
            $link_ins = $_POST['link_image'];
            $image_old = promotion::findOne($id)->image;
            $target_dir = "./public/upload/promotion/";
            $nameimage = time() . $_FILES["upload-avatar-input"]["name"];
            $target_file = $target_dir . $nameimage;
            $errors = [];
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));



            if(count($errors) > 0){
                redirect('errors', $errors, 'edit-khuyenmai/'.$id);
            }else {
                if(!($_FILES['upload-avatar-input']['name'] == "")) {
                    if (empty($_POST['link_image'])) {
                        $errors[] = 'Không được để trống link insta';
                    }
                    if (empty($_POST['meta'])) {
                        $errors[] = 'Không được để trống link tiêu đề';
                    }

// Check file size
                    if ($_FILES["upload-avatar-input"]["size"] > 500000) {
                        $errors[]= "Sorry, your file is too large.";
                    }

// Allow certain file formats
                    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                        && $imageFileType != "gif" ) {
                        $errors[] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                    }
                    if (move_uploaded_file($_FILES["upload-avatar-input"]["tmp_name"], $target_file)) {
                        $result = promotion::updatefind($id,[
                            "image" => $nameimage,
                            "link_book" => $link_ins,

                        ]);

                        if (file_exists('./public/upload/insta/'.$image_old)) {
                            unlink('./public/upload/insta/'.$image_old);
                        }
                        if ($result){
                            redirect('success', "Cập nhật thành công!", 'edit-khuyenmai/'.$id);
                        }
                    }

                }else {
                    promotion::updatefind($id,[
                        "image" => $image_old,
                        "link_book" => $link_ins
                    ]);
                    redirect('success', "Cập nhật thành công!", 'edit-khuyenmai/'.$id);

                }

            }

        }
        $this->render('admin.UserDisplay.khuyenmai.editkhuyetmai',compact('oneData'));
    }

    public function updateInsta($id){
        if(isset($_POST['sb-insta'])){
            $link_ins = $_POST['link_image'];
            $meta = $_POST['meta'];
            $image_old = insta::findOne($id)->link;
            $target_dir = "./public/upload/insta/";
            $nameimage = time() . $_FILES["upload-avatar-input"]["name"];
            $target_file = $target_dir . $nameimage;
            $errors = [];
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));



            if(count($errors) > 0){
                redirect('errors', $errors, 'edit-insta/'.$id);
            }else {
                if(!($_FILES['upload-avatar-input']['name'] == "")) {
                    if (empty($_POST['link_image'])) {
                        $errors[] = 'Không được để trống link insta';
                    }
                    if (empty($_POST['meta'])) {
                        $errors[] = 'Không được để trống link tiêu đề';
                    }

// Check file size
                    if ($_FILES["upload-avatar-input"]["size"] > 500000) {
                        $errors[]= "Sorry, your file is too large.";
                    }

// Allow certain file formats
                    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                        && $imageFileType != "gif" ) {
                        $errors[] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                    }
                    if (move_uploaded_file($_FILES["upload-avatar-input"]["tmp_name"], $target_file)) {
                        $result = insta::updatefind($id,[
                            "link" => $nameimage,
                            "link_insta" => $link_ins,
                            "meta" => $meta
                        ]);

                        if (file_exists('./public/upload/insta/'.$image_old)) {
                            unlink('./public/upload/insta/'.$image_old);
                        }
                        if ($result){
                            redirect('success', "Cập nhật thành công!", 'edit-insta/'.$id);
                        }
                    }

                }else {
                     insta::updatefind($id,[
                        "link" => $image_old,
                        "link_insta" => $link_ins,
                         "meta" => $meta
                    ]);
                    redirect('success', "Cập nhật thành công!", 'edit-insta/'.$id);

                }

            }

        }
    }
}