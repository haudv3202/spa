<?php
namespace App\admin\controllers;
use App\controllers\BaseController;
use App\models\BlogService;
use App\models\Category;
use App\models\Service;

class ServiceController extends BaseController{
    protected $service;
    protected $category;
    protected $blogsv;
    public function __construct()
    {
        $this->service = new Service();
        $this->category = new Category();
        $this->blogsv = new BlogService();
    }
    public function listService(){
        $result = $this->service->countColumn();
        $number = 0;
        if ($result != null && count($result) > 0){
            $number = $result[0]->number;
        }
        $pages = ceil($number / 8);
        $current_page = 1;
        if (isset($_GET['page'])){
            $current_page = $_GET['page'];
        }
        $index = ($current_page - 1) * 8;
        $category = $this->category->getAllCategory();
        $service = $this->service->getAllLimit($index);
        $this->render('admin.service.list', compact('service', 'category', 'pages'));
    }
    public function listServiceIdCate($id){
        $result = $this->service->countColumnId($id, 'id_cate');
        $number = 0;
        if ($result != null && count($result) > 0){
            $number = $result[0]->number;
        }
        $pages = ceil($number / 8);
        $current_page = 1;
        if (isset($_GET['page'])){
            $current_page = $_GET['page'];
        }
        $index = ($current_page - 1) * 8;
        $category = $this->category->getAllCategory();
        $service = $this->service->getAllLimitCateId($id, $index);
        $this->render('admin.service.list', compact('service', 'category','pages'));
    }
    public function addServicePost(){
        if (isset($_POST['add-new'])){
            $errors = [];
            if (empty($_POST['namesv'])){
                $errors[] = 'Bạn cần nhập tên dịch vụ';
            }
            if (empty($_POST['don_gia'])){
                $errors[] = 'Bạn cần nhập đơn giá';
            }
            if (empty($_POST['desc'])){
                $errors[] = 'Bạn cần nhập mô tả';
            }
            if (isset($_FILES['upload']['name'])) {
                $target_dir = "./public/upload/service/";
                $name = time() . $_FILES["upload"]["name"];
                $target_file = $target_dir . $name;
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
            }
            if (count($errors) > 0){
                redirect('errors', $errors, 'service-list');
            }else{
                if (move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file)) {
                    $result = $this->service->addService(NULL, $_POST['catesv'], $_POST['namesv'],$_POST['don_gia'], $name, $_POST['desc']);
                }
                if ($result){
                    redirect('success', 'Thêm mới thành công', 'service-list');
                }
            }
        }
    }
    public function editService($id){
        $category = $this->category->getAllCategory();
        $service = $this->service->getDetailService($id);
        $this->render('admin.service.edit', compact('service', 'category'));
    }
    public function updateServicePost($id){
        if (isset($_POST['btn-sm'])){
            $errors = [];
            if (empty($_POST['namesv'])){
                $errors[] = 'Bạn cần nhập tên dịch vụ';
            }
            if (empty($_POST['don_gia'])){
                $errors[] = 'Bạn cần nhập đơn giá';
            }
            if (empty($_POST['desc'])){
                $errors[] = 'Bạn cần nhập mô tả';
            }
            if ($_FILES['upload']['name'] != '') {
                $target_dir = "./public/upload/service/";
                $name =  time().$_FILES["upload"]["name"];
                $image_old = $this->service->getDetailService($id)->image;
                $target_file = $target_dir . $name;
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
                if (count($errors) > 0){
                    redirect('errors', $errors, 'edit-service/' . $id);
                }else{
                    if (move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file)) {
                        $result = $this->service->updateService($id, $_POST['catesv'], $_POST['namesv'],$_POST['don_gia'], $name, $_POST['desc']);
                    }
                    if (file_exists('./public/upload/service/'.$image_old)) {
                        unlink('./public/upload/service/'.$image_old);
                    }
                    if ($result){
//                        var_dump($result);
                        redirect('success', 'Thêm mới thành công', 'service-list');
                    }
                }
            }else {
                if (count($errors) > 0) {
                    redirect('errors', $errors, 'edit-service/' . $id);
                } else {
                    $result = $this->service->updateServiceNoIm($id, $_POST['catesv'], $_POST['namesv'], $_POST['don_gia'], '', $_POST['desc']);
                    if ($result) {
//                        var_dump($result);
                        redirect('success', 'Cập nhật thành công', 'edit-service/' . $id);
                    }
                }
            }
        }
    }
    public function deteleService($id){
        $this->service->deleteService($id);
        $this->blogsv->deleteServiceId($id);
        header('location: '.route('service-list'));
    }
}
?>
