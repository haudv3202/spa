<?php
namespace App\admin\controllers;
use App\controllers\BaseController;
use App\models\Endow;

class EndowController extends BaseController{
    public function listEndow(){
        $endow = Endow::GetAll();
        $this->render('admin.endow.list', compact('endow'));
    }
    public function deleteEndow($id){
        $endow = Endow::delete($id);
        $_SESSION['success'] = "Xóa thành công!";
        header('location: '.route('endow-list'));
    }
}
?>
