<?php
namespace App\controllers;
use App\models\Banner;
use App\models\BlogService;
use App\models\Endow;
use App\models\questions;
use App\models\Service;
use App\models\social;
use App\models\Staff;
use App\models\settings;
use App\models\insta;
use App\models\Category;

class HomeController extends BaseController{

    protected $service;
    protected $blog;
    protected $category;
    public function __construct()
    {

        $this->blog = new BlogService();
        $this->service = new Service();
        $this->category = new Category();
    }
    public function index(){
        $this->render('users.signin');
    }

    public function about(){

        $this->render('home.about');
    }
    public function homeList(){
        $banner = Banner::GetAll();
        $datasocial = $this->socialPage();
        $service = $this->service->getPostslimit(6);
        $service3 = $this->service->getPostslimit(3);
        $allService = $this->category->getAllCategoryName();
        foreach ($allService as $value){
            $value->service = $this->service->getAllServicename($value->id);
        }
        $allServiceEnd = $this->category->getAllCategoryNameEnd();
        foreach ($allServiceEnd as $value){
            $value->service = $this->service->getAllServicename($value->id);
        }
        $instagram = insta::GetAll();
        $content = [];
        $posts = $this->blog->getPostslimit(3);
        foreach ($posts as $value){
            $value->name_service = $this->service->getAllServiceWhere($value->id_service)->name;
        }
        $this->render('home.index',compact("service","service3","content","posts","datasocial",'banner','instagram','allService','allServiceEnd'));

    }
    public function mockupPost(){
        if (isset($_POST['btn-sm'])){
            $errors = [];
            if (empty($_POST['fullname'])){
                $errors[] = 'Không được bỏ trống tên';
            }
            if (empty($_POST['phone'])){
                $errors[] = 'Không được bỏ trống số điện thoại';
            }

            if (count($errors) > 0){
                redirect('errors', $errors, '');
            }else{
                date_default_timezone_set("Asia/Ho_Chi_Minh");
                $date = date("Y-m-d");
                $result = Endow::addItems([
                    'id' => NULL,
                    'name' => $_POST['fullname'],
                    'phone' => $_POST['phone'],
                    'create_time' => $date,
                ]);
                if ($result){
                    redirect('success', "Thêm thành công!", '');
                }
            }
        }
    }
    public function serviceList(){
        $datasocial = $this->socialPage();
        $service = $this->service->getAllService();
        $staff = Staff::GetAll();
        $this->render('home.service', compact('service', 'staff',"datasocial"));
    }
    public function aboutList(){
        $datasocial = $this->socialPage();
        $instagram = insta::GetAll();
        $this->render('home.about',compact("datasocial","instagram"));
    }

    public function booking(){
        $datasocial = $this->socialPage();
        $servic3 = $this->service->getPostslimit(3);
        $service3s = $this->service->getPostslimit(3);
        $questions = questions::GetAll();
        $this->render('home.booking',compact("servic3","questions","service3s","datasocial"));
    }
    public function socialPage(){
        return social::GetAll();
    }
    public function policy(){
        $this->render('home.policy');
    }
    public function terms(){
        $this->render('home.terms');
    }

    public function serviceHeader(){
        $allService = $this->service->getAllService();
        $this->render('');
    }

}
?>
