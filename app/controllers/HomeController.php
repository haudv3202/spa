<?php
namespace App\Controllers;
use App\Models\Account;
use App\models\BlogService;
use App\models\Endow;
use App\Models\Product;
use App\models\questions;
use App\Models\Service;
use App\models\social;
use App\models\Staff;
use App\models\settings;

class HomeController extends BaseController{
    protected $product;
    protected $account;
    protected $service;

    public function __construct()
    {
//        $this->product = new Product();
//        $this->account = new Account();
        $this->blog = new BlogService();
        $this->service = new Service();
    }
    public function index(){
        $this->render('users.signin');
    }

    public function about(){
        $this->render('home.about');
    }
    public function homeList(){
        $datasocial = $this->socialPage();
        $service = $this->service->getPostslimit(6);
        $service3 = $this->service->getPostslimit(3);
        $content = [];
        $content["title-about"] = settings::findString("review","title-about")->titler;
        $content["desribe-about"] = settings::findString("review","desribe-about")->titler;
        $content["desribe-service"] = settings::findString("review","desribe-service")->titler;
        $content["desribe-blog"] = settings::findString("review","desribe-blog")->titler;
        $content["image-abouts"] = settings::findStrings("review","image-about","titler");
        $posts = $this->blog->getPostslimit(3);
        foreach ($posts as $value){
            $value->name_service = $this->service->getAllServiceWhere($value->id_service)->name;
        }
        $this->render('home.index',compact("service","service3","content","posts","datasocial"));
    }
    public function mockupPost(){
        if (isset($_POST['btn-sm'])){
            $errors = [];
            if (empty($_POST['fullname'])){
                $errors[] = 'Không được bỏ trống tên';
            }
            if (empty($_POST['email'])){
                $errors[] = 'Không được bỏ trống email';
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
                    'email' => $_POST['email'],
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
        $this->render('home.about',compact("datasocial"));
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

}
?>
