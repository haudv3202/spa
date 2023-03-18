<?php
namespace App\Controllers;
use App\Models\Account;
use App\models\Endow;
use App\Models\Product;
class HomeController extends BaseController{
    protected $product;
    protected $account;
    public function __construct()
    {
//        $this->product = new Product();
//        $this->account = new Account();
    }
    public function index(){
        $this->render('users.signin');
    }
    public function homeList(){
        $this->render('home.index');
    }
    public function mockupPost(){
        if (isset($_POST['btn-sm'])){
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
                redirect('success', "Thêm thành công!", '/');
            }
        }

    }

}
?>
