<?php
namespace App\controllers;
use App\models\Banner;
use App\models\BlogService;
use App\models\contact;
use App\models\Endow;
use App\models\questions;
use App\models\Service;
use App\models\social;
use App\models\Staff;
use App\models\settings;
use App\models\insta;
use App\models\Category;
use App\models\Newletters;

class HomeController extends BaseController{

    protected $service;
    protected $blog;
    protected $category;
    protected $endow;
    protected $contact;
    public function __construct()
    {

        $this->blog = new BlogService();
        $this->service = new Service();
        $this->category = new Category();
        $this->endow = new Endow();
        $this->contact = new contact();

    }
    public function index(){
        $this->render('users.signin');
    }

    public function about(){

        $this->render('home.about');
    }
    public function homeList(){
        $banner = Banner::GetAll();
        $newletter = Newletters::findOne(1,"statuts");
        $datasocial = $this->socialPage();
        $service = $this->service->getPostslimit(6);
        $service3 = $this->service->getPostslimit(3);
        $allService = $this->category->getAllCategoryName();
        foreach ($allService as $value){
            $value->service = $this->service->getAllServicename($value->id);
        }
        $instagram = insta::GetAll();
        $content = [];
        $posts = $this->blog->getPostslimit(3);
        foreach ($posts as $value){
            $value->name_service = $this->service->getAllServiceWhere($value->id_service)->name;
        }
        $this->render('home.index',compact("service","service3","content","posts","datasocial",'banner','instagram','allService',"newletter"));

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
                if (isset($_POST['problem']) == true){
                    $problem = $_POST['problem'];
                }else{
                    $problem = NULL;
                }
                $result = $this->endow->addEndow($_POST['fullname'], $_POST['phone'], $problem , $date);
                if ($result){
                    redirect('success', "Gửi thông tin thành công!", '');
                }
            }
        }
    }
    public function serviceList(){
        $datasocial = $this->socialPage();
        $service = $this->category->getAllCategory();
        $allService = $this->category->getAllCategoryName();
        foreach ($allService as $value){
            $value->service = $this->service->getAllServicename($value->id);
        }
        $staff = Staff::GetAll();
        $this->render('home.service', compact('service', 'staff',"datasocial","allService"));
    }

    public function serviceListDetail($id){
        $datasocial = $this->socialPage();
        $Services = $this->service->getAllCateId($id);
        $allService = $this->category->getAllCategoryName();
        foreach ($allService as $value){
            $value->service = $this->service->getAllServicename($value->id);
        }
        $staff = Staff::GetAll();
        $this->render('home.serviceDetail', compact('Services', 'staff',"datasocial","allService"));

    }
    public function aboutList(){
        $datasocial = $this->socialPage();
        $instagram = insta::GetAll();
        $allService = $this->category->getAllCategoryName();
        foreach ($allService as $value){
            $value->service = $this->service->getAllServicename($value->id);
        }
        $this->render('home.about',compact("datasocial","instagram","allService"));
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
        $allService = $this->category->getAllCategoryName();
        foreach ($allService as $value){
            $value->service = $this->service->getAllServicename($value->id);
        }
        $this->render('home.policy',compact("allService"));
    }

    public function policyMember(){
        $allService = $this->category->getAllCategoryName();
        foreach ($allService as $value){
            $value->service = $this->service->getAllServicename($value->id);
        }
        $this->render('home.policymember',compact("allService"));
    }
    public function terms(){
        $this->render('home.terms');
    }
    public function contactPost(){
        if (isset($_POST['btn-sm'])){
            $errors = [];
            if (empty($_POST['fullname'])){
                $errors[] = 'Bạn chưa nhập tên';
            }
            if (empty($_POST['email'])){
                $errors[] = 'Bạn chưa nhập email';
            }
            if (empty($_POST['problem'])){
                $errors[] = 'Bạn chưa nhập vấn đề';
            }
            if (empty($_POST['message'])){
                $errors[] = 'Bạn chưa nhập lời nhắn';
            }
            if (count($errors) > 0){
                redirect('errors', $errors, 'contact');
            }else{
                date_default_timezone_set("Asia/Ho_Chi_Minh");
                $date = date("Y-m-d");
                $result = $this->contact->addContact($_POST['fullname'], $_POST['email'], $_POST['problem'], $_POST['message'], $date);
                if ($result){
                    redirect('success', "Gửi yêu cầu thành công", 'contact');
                }
            }
        }
    }

    public function serviceHeader(){
        $allService = $this->service->getAllService();
        $this->render('');
    }

}
?>
