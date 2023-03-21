<?php
namespace App\admin\controllers;
use App\Controllers\BaseController;
use App\models\Banner;
use App\models\BlogService;

class BannerController extends BaseController{
    public function banner(){
        $banner = Banner::GetAll();
        $this->render('admin.banner.list', compact('banner'));
    }
    public function editBanner($id){
        $banner = Banner::findOne($id);
        $this->render('admin.banner.edit', compact('banner'));
    }
    public function editBannerPost($id){
        if (isset($_POST['sb-banner'])){
            $errors = [];
            if (empty($_POST['title'])){
                $errors[] = "Bạn cần nhập tiêu đề";
            }
            if (empty($_POST['desc'])){
                $errors[] = "Bạn cần nhập mô tả";
            }
            //anh1
            if ($_FILES['upload']['name'] != '') {
                $target_dir = "./public/upload/banner/";
                $name = time() . $_FILES["upload"]["name"];
                $target_file = $target_dir . $name;
                $image_old = Banner::findOne($id)->image_1;
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                if (file_exists($target_file)) {
                    $errors[] = "Image 1: Sorry, file already exists.";
                }
// Check file size
                if ($_FILES["upload"]["size"] > 500000) {
                    $errors[] = "Image 1: Sorry, your file is too large.";
                }
// Allow certain file formats
                if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif") {
                    $errors[] = "Image 1: Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                }
            }else{
                $name = Banner::findOne($id)->image_1;
            }
            //anh2
            if ($_FILES['upload2']['name'] != '') {
                $target_dir = "./public/upload/banner/";
                $name2 = time() . $_FILES["upload2"]["name"];
                $target_file2 = $target_dir . $name2;
                $image_old2 = Banner::findOne($id)->image_2;
                $uploadOk = 1;
                $imageFileType2 = strtolower(pathinfo($target_file2, PATHINFO_EXTENSION));
                if (file_exists($target_file)) {
                    $errors[] = "Image 2: Sorry, file already exists.";
                }
// Check file size
                if ($_FILES["upload2"]["size"] > 500000) {
                    $errors[] = "Image 2: Sorry, your file is too large.";
                }
// Allow certain file formats
                if ($imageFileType2 != "jpg" && $imageFileType2 != "png" && $imageFileType2 != "jpeg"
                    && $imageFileType2 != "gif") {
                    $errors[] = "Image 2: Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                }
            }else{
                $name2 = Banner::findOne($id)->image_2;
            }


            if (count($errors) > 0) {
                redirect('errors', $errors, 'edit-banner/'.$id);
            } else {
                if ($_FILES['upload']['name'] != ''){
                    move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file);
                }
                if ($_FILES['upload2']['name'] != ''){
                    move_uploaded_file($_FILES["upload2"]["tmp_name"], $target_file2);
                }
                        $result = Banner::updatefind($id, [
                            'title' => $_POST['title'],
                            'image_1' => $name,
                            'image_2' => $name2,
                            'description' => $_POST['desc']
                        ]);
                        if (file_exists('./public/upload/banner/'.$image_old)) {
                            unlink('./public/upload/banner/'.$image_old);
                        }
                        if (file_exists('./public/upload/banner/'.$image_old2)) {
                            unlink('./public/upload/banner/'.$image_old2);
                        }
                if ($result) {
                    redirect('success', "Thêm mới thành công!", 'manage-banner');
                }
            }
        }
    }
}
?>
