<?php
namespace App\admin\controllers;
use App\Controllers\BaseController;
use App\models\rankmember;
class rankMemberController extends BaseController {
    public function index() {
        $dataAll = rankmember::GetAll();
        $this->render('admin.UserDisplay.rank.listRank',compact('dataAll'));
    }

    public function  addRank(){
        if(isset($_POST['sb-rank'])){
            $name = $_POST['namerank'];
            $price = $_POST['price'];
            $errors = [];
            if(empty($_POST['namerank'])){
                $errors[] = 'Bạn tên hạng';
            }
            if(empty($_POST['price'])){
                $errors[] = 'Bạn cần nhập giá tiền';
            }
            if(count($errors) > 0){
                redirect('errors', $errors, 'add-rank');
            }else {
                $result = rankmember::addItems(
                    [
                        "id" =>  NULL,
                        "name" => $name,
                        "total" => $price
                    ]
                );
                if ($result){
                    redirect('success', "Thêm thành công!", 'add-rank');
                }
            }
        }
        $this->render('admin.UserDisplay.rank.addRank');
    }

    public function editRank($id){
        $dataOne = rankmember::findOne($id);
        if(isset($_POST['sb-update'])){
            $name = $_POST['namerank'];
            $price = $_POST['price'];
            $errors = [];
            if(empty($_POST['namerank'])){
                $errors[] = 'Bạn tên hạng';
            }
            if(empty($_POST['price'])){
                $errors[] = 'Bạn cần nhập giá tiền';
            }
            if(count($errors) > 0){
                redirect('errors', $errors, 'edit-rank/'.$id);
            }else {
                $result = rankmember::updatefind($id,
                [
                   "name" => $name,
                    "total" => $price
                ]);
                if ($result){
                    redirect('success', "Cập nhật thành công!", 'edit-rank/'.$id);
                }
            }
        }
        $this->render('admin.UserDisplay.rank.editRank',compact('dataOne'));
    }

    public function deleteRank($id){
        rankmember::delete($id);
        $_SESSION['success'] = "Xóa thành công!";
        redirect('success', "Xóa thành thành công!", 'list-rank');
    }
}