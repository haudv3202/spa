<?php
namespace App\admin\controllers;
use App\Controllers\BaseController;
use App\models\BlogService;use App\models\Staff;

class StaffController extends BaseController{
    protected $staff;

    public function __construct()
    {
        $this->staff = new Staff();
    }
    public function listStaff(){
        $staff = Staff::GetAll();
        $this->render('admin.staff.list', compact('staff'));
    }
    public function editStaff($id){
        $staff = Staff::findOne($id);
        $this->render('admin.staff.edit', compact('staff'));
    }
    public function updateStaffPost($id){
        if ($_POST['sb-staff']){
            $errors = [];
            if (empty($_POST['namesf'])){
                $errors[] = 'Bạn cần nhập tên';
            }
            if (empty($_POST['positionsf'])){
                $errors[] = 'Bạn cần nhập chức vụ';
            }
            if (empty($_POST['linksf'])){
                $errors[] = 'Bạn cần nhập link MXH';
            }
            if ($_FILES['upload']['name'] != '') {
                $target_dir = "./public/upload/blogSv/";
                $name = time() . $_FILES["upload"]["name"];
                $target_file = $target_dir . $name;
                $image_old = Staff::findOne($id)->image;
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                if (file_exists($target_file)) {
                    $errors[] = "Sorry, file already exists.";
                }
// Check file size
                if ($_FILES["upload"]["size"] > 500000) {
                    $errors[] = "Sorry, your file is too large.";
                }
// Allow certain file formats
                if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif") {
                    $errors[] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                }
                if (count($errors) > 0) {
                    redirect('errors', $errors, 'edit-staff/'.$id);
                }else{
                    if (move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file)) {
                        $result = Staff::updatefind($id,[
                            "id" => $id,
                            "name" => $_POST['namesf'],
                            "image" => $name,
                            "position" => $_POST['positionsf'],
                            "link_mxh" => $_POST['linksf']
                        ]);
                        if (file_exists('./public/upload/blogSv/'.$image_old)) {
                            unlink('./public/upload/blogSv/'.$image_old);
                        }
                    }
                    if ($result) {
                        redirect('success', "Cập nhật thành công!", 'edit-staff/'.$id);
                    }
                    }
                }else{
                $result = Staff::updatefind($id,[
                    "id" => $id,
                    "name" => $_POST['namesf'],
                    "position" => $_POST['positionsf'],
                    "link_mxh" => $_POST['linksf']
                ]);
                if ($result) {
                    redirect('success', "Cập nhật thành công!", 'edit-staff/'.$id);
                }
            }
        }
    }
}
?>
