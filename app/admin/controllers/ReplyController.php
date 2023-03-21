<?php
namespace App\admin\controllers;
use App\controllers\BaseController;
use App\models\Reply;

class ReplyController extends BaseController{
    public function listReply(){
        $reply = Reply::GetAll();
        $this->render('admin.reply.list', compact('reply'));
    }
    public function deleteReply($id){
        $reply = Reply::delete($id);
        $_SESSION['success'] = "Xóa thành công!";
        header('location: '.route('reply-list'));
    }
}
?>
