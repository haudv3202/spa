<?php
namespace App\Controllers;
use App\Models\Account;
use App\models\Endow;
use App\Models\Product;
use App\Models\Service;
use App\models\Staff;

class HomeController extends BaseController{
    protected $product;
    protected $account;
    protected $service;

    public function __construct()
    {
//        $this->product = new Product();
//        $this->account = new Account();
        $this->service = new Service();
    }
    public function index(){
        $this->render('users.signin');
    }
    public function homeList(){
        $this->render('home.index');
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
        $service = $this->service->getAllService();
        $staff = Staff::GetAll();
        $this->render('home.service', compact('service', 'staff'));
    }

}
?>
