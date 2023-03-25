<?php
namespace App\admin\controllers;
use App\controllers\BaseController;
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
                $image_old = Banner::findOne($id)->image;
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
                    redirect('errors', $errors, 'add-blog-service');
                }else{
                     if (move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file)) {
                         $result = Banner::updatefind($id, [
                            'title' => $_POST['title'],
                            'image' => $name,
                            'description' => $_POST['desc']
                        ]);
                         }
                     if (file_exists('./public/upload/banner/'.$image_old)) {
                            unlink('./public/upload/banner/'.$image_old);
                        }
                     if ($result) {
                        redirect('success', "Thêm mới thành công!", 'manage-banner');
                        }
                     }
                }else{
                if (count($errors) > 0) {
                    redirect('errors', $errors, 'edit-blog-service/'.$id);
                }else{
                    $result = Banner::updatefind($id, [
                        'title' => $_POST['title'],
                        'description' => $_POST['desc']
                    ]);
                    if ($result) {
                        redirect('success', "Thêm mới thành công!", 'manage-banner');
                    }
                }
            }

        }
    }
}
?>
