<?php

namespace App\admin\controllers;

use App\controllers\BaseController;
use App\models\Category;
use App\models\contactUs;
use App\models\insta;
use App\models\questions;
use App\models\Service;
use App\models\social;
use App\models\promotion;

class QuestionsController extends BaseController
{
    protected $service;
    protected $category;
    public function __construct() {
        $this->service = new Service();
        $this->category = new Category();
    }
    public function index(){
        $questions = questions::GetAll();
        $this->render('admin.UserDisplay.questions.listQuestions',compact('questions'));
    }

    public function addQuestion(){

        $this->render('admin.UserDisplay.questions.addQuestion');
    }

    public function addQuestionPost(){
        if(isset($_POST['sb-question'])){
            $question = $_POST['question'];
            $reply = $_POST['reply'];
            $errors = [];
            if(empty($_POST['question'])){
                $errors[] = 'Bạn cần nhập câu hỏi';
            }
            if(empty($_POST['reply'])){
                $errors[] = 'Bạn cần nhập tên nội dung trả lời';
            }

            if(count($errors) > 0){
                redirect('errors', $errors, 'add-question');
            }else {
                $result = questions::addItems(
                    [
                        "id" =>  NULL,
                        "question" => $question,
                        "reply" => $reply
                    ]
                );
                if ($result){
                    redirect('success', "Thêm thành công!", 'add-question');
                }
            }
        }
    }

    public function editQuestion($id){
        $dataOne = questions::findOne($id);
        $this->render('admin.UserDisplay.questions.editQuestion',compact('dataOne'));
    }

    public function updateQuestion($id){
        if(isset($_POST['sb-edit-question'])){
            $question = $_POST['question'];
            $reply = $_POST['reply'];
            $errors = [];
            if(empty($_POST['question'])){
                $errors[] = 'Bạn cần nhập câu hỏi';
            }
            if(empty($_POST['reply'])){
                $errors[] = 'Bạn cần nhập tên nội dung trả lời';
            }

            if(count($errors) > 0){
                redirect('errors', $errors, 'add-question');
            }else {
                $result = questions::updatefind($id,[
                    "question" => $question,
                    "reply" => $reply
                ]);
                if ($result){
                    redirect('success', "Cập nhật thành công!", 'add-question');
                }
            }
        }
    }
    public function deleteQuestion($id){
        questions::delete($id);
        $_SESSION['success'] = "Xóa thành công!";
        header('location: '.route('questions'));
    }
    public function blogQuestion($id){
        $question = questions::findOne($id);
        $this->render('admin.UserDisplay.questions.blogQuestion',compact('question'));
    }

    public function promotion(){
        $datasocial = social::GetAll();
        $promotion = promotion::GetAll();
        $allService = $this->category->getAllCategoryName();
        foreach ($allService as $value){
            $value->service = $this->service->getAllServicename($value->id);
        }
        $this->render('home.promotion',compact('promotion',"datasocial","allService"));
    }
    // giao diện
    public function blogQuestions(){
        $datasocial = social::GetAll();
        $question = questions::GetAll();
        $instagram = insta::GetAll();
        $allService = $this->category->getAllCategoryName();
        foreach ($allService as $value){
            $value->service = $this->service->getAllServicename($value->id);
        }
        $this->render('question.blogQuestion',compact('question','instagram',"datasocial","allService"));
    }
}