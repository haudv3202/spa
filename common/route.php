<?php
use Phroute\Phroute\RouteCollector;
use App\admin\controllers\HomeController;
use App\Controllers\AuthController;
use App\admin\controllers\UserDisplayController;
use App\admin\controllers\QuestionsController;
use App\admin\controllers\rankMemberController;
use App\admin\controllers\SettingController;
use App\admin\controllers\socialController;
use App\admin\controllers\BlogServiceController;
use App\admin\controllers\BannerController;
use App\admin\controllers\CategoryController;
use App\admin\controllers\ServiceController;
use App\admin\controllers\EndowController;
use App\admin\controllers\ReplyController;
use App\admin\controllers\StaffController;
use App\admin\controllers\StatisticController;
use App\admin\controllers\UsersControlller;


use App\controllers\UsersController as user;
use App\controllers\NewlettersController;
use App\controllers\HomeController as homeuser;

//use App\controllers\homeController;
$url = !isset($_GET['url']) ? "/" : $_GET['url'];

$router = new RouteCollector();

// filter check đăng nhập
$router->filter('auth', function(){
    if(!isset($_SESSION['auth']) || empty($_SESSION['auth'])){
        header('location: ' . BASE_URL . 'login');die;
    }
});


// bắt đầu định nghĩa ra các đường dẫn
//$router->get('/', function(){
//    return "trang chủ";
//});
//$router->get('admin', [App\Controllers\UsersController::class, 'dashboard']);
if (isset($_SESSION['account'])){
    if ($_SESSION['account']->role_id == 2){
//Category
        $router->get('add-category', [CategoryController::class, 'addCategory']);
        $router->post('add-category-post', [CategoryController::class, 'addCategoryPost']);
        $router->get('edit-category/{id}', [CategoryController::class, 'editCategory']);
        $router->post('update-category/{id}', [CategoryController::class, 'updateCategoryPost']);
        $router->get('delete-category/{id}', [CategoryController::class, 'deteleCategory']);
        $router->get('service-category', [CategoryController::class, 'tableCategory']);
        $router->get('detail-category/{id}', [ServiceController::class, 'listServiceIdCate']);
//Service
        $router->get('service-list', [ServiceController::class, 'listService']);
        $router->post('add-service-post', [ServiceController::class, 'addServicePost']);
//$router->get('edit-service-cate/{id}', [App\admin\controllers\CategoryController::class, 'editService']);
//$router->post('update-service-cate/{id}', [App\admin\controllers\CategoryController::class, 'updateServicePost']);
//$router->get('delete-service-cate/{id}', [App\admin\controllers\CategoryController::class, 'deteleService']);
        $router->get('edit-service/{id}', [ServiceController::class, 'editService']);
        $router->post('update-service/{id}', [ServiceController::class, 'updateServicePost']);
        $router->get('delete-service/{id}', [ServiceController::class, 'deteleService']);
        $router->get('detail-service/{id}', [BlogServiceController::class, 'listBlogSvIdCate']);
//Blog Service
        $router->get('service-blog', [BlogServiceController::class, 'listBlogSv']);
        $router->get('add-blog-service', [BlogServiceController::class, 'addBlogSv']);
        $router->post('add-blog-service-post', [BlogServiceController::class, 'addBlogSvPost']);
        $router->get('edit-blog-service/{id}', [BlogServiceController::class, 'editBlogSv']);
        $router->post('update-blog-service/{id}', [BlogServiceController::class, 'updateBlogSvPost']);
        $router->get('delete-blog-service/{id}', [BlogServiceController::class, 'deleteBlogSv']);
        $router->get('detail-blog-service/{id}', [BlogServiceController::class, 'detailBlogSv']);
//Staff
        $router->get('staff-list', [StaffController::class, 'listStaff']);
        $router->get('edit-staff/{id}', [StaffController::class, 'editStaff']);
        $router->post('update-staff-post/{id}', [StaffController::class, 'updateStaffPost']);
//Reply
        $router->get('reply-list', [ReplyController::class, 'listReply']);
        $router->get('delete-reply/{id}', [ReplyController::class, 'deleteReply']);
//Endow
        $router->get('endow-list', [EndowController::class, 'listEndow']);
        $router->get('delete-endow/{id}', [EndowController::class, 'deleteEndow']);
//Statistic
        $router->get('statistic-list', [StatisticController::class, 'listStatistic']);


//giao-dien
        $router->get('contact-us', [UserDisplayController::class, 'index']);
        $router->get('quan-li-khach-hang', [UserDisplayController::class, 'index']);
        $router->get('instagram', [UserDisplayController::class, 'insta']);
        $router->get('edit-contact/{id}', [UserDisplayController::class, 'edit']);
        $router->get('edit-insta/{id}', [UserDisplayController::class, 'editInsta']);
        $router->post('update-contact/{id}', [UserDisplayController::class, 'update']);
        $router->post('update-insta/{id}', [UserDisplayController::class, 'updateInsta']);
        $router->get('social', [socialController::class, 'index']);
        $router->get('social-edit/{id}', [socialController::class, 'edit']);
        $router->post('social-edit/{id}', [socialController::class, 'edit']);
        $router->get('questions', [QuestionsController::class, 'index']);
        $router->get('setings', [SettingController::class, 'index']);
        $router->get('setings-edit/{id}', [SettingController::class, 'edit']);
        $router->post('setings-edit/{id}', [SettingController::class, 'edit']);
        $router->get('setings-edit-image/{id}', [SettingController::class, 'edit_image']);
        $router->post('setings-edit-image/{id}', [SettingController::class, 'edit_image']);
//newletters
        $router->get('newletters',[NewlettersController::class ,'index']);
        $router->get('add-newletters', [NewlettersController::class, 'addNewletters']);
        $router->post('add-newletters-post', [NewlettersController::class, 'addNewlettersPost']);
        $router->get('edit-newletters/{id}', [NewlettersController::class, 'edit']);
        $router->post('update-newletters/{id}', [NewlettersController::class, 'update']);
        $router->get('delete-newletters/{id}', [NewlettersController::class, 'deleteNewletters']);
//question
        $router->get('add-question', [QuestionsController::class, 'addQuestion']);
        $router->post('add-question', [QuestionsController::class, 'addQuestionPost']);
        $router->get('edit-question/{id}', [QuestionsController::class, 'editQuestion']);
        $router->post('edit-question/{id}', [QuestionsController::class, 'updateQuestion']);
        $router->get('delete-question/{id}', [QuestionsController::class, 'deleteQuestion']);
        $router->get('blog-question/{id}',[QuestionsController::class, 'blogQuestion']);

//ql user
        $router->get('user', [UsersControlller::class, 'showUser']);
        $router->get('search/{value}', [UsersControlller::class, 'search']);

        $router->get('add_user', [UsersControlller::class, 'addUser']);
        $router->post('add_user', [UsersControlller::class, 'addUser']);

        $router->get('chi-tiet-nguoi-dung', [UsersControlller::class, 'detailUser']);
        $router->get('add-serivce-user/{id}', [UsersControlller::class, 'addServiceUser']);
        $router->get('add-serivce-user/add-detailUser/{id}', [UsersControlller::class, 'getservice']);
        $router->get('editServiceUser/add-detailUser/{id}', [UsersControlller::class, 'getservice']);
        $router->post('add-serivce-user/{id}', [UsersControlller::class, 'addServiceUser']);
        $router->get('delete-user/{id}', [UsersControlller::class, 'deleteUser']);
        $router->get('update-user/{id}', [UsersControlller::class, 'updateUser']);
        $router->post('update-user/{id}', [UsersControlller::class, 'updateUser']);
//$router->get('list-user', [App\Controllers\UsersController::class, 'index']);

//xóa chi tiết chi tiết thanh toán
        $router->get('delete-detail-user/{id}/{backpage}', [UsersControlller::class, 'deleteServiceUser']);
//quản lí loại khách
        $router->get('list-rank', [rankMemberController::class, 'index']);
        $router->get('delete-rank/{id}', [rankMemberController::class, 'deleteRank']);
        $router->get('add-rank', [rankMemberController::class, 'addRank']);
        $router->post('add-rank', [rankMemberController::class, 'addRank']);
        $router->get('edit-rank/{id}', [rankMemberController::class, 'editRank']);
        $router->post('edit-rank/{id}', [rankMemberController::class, 'editRank']);
//update profile admin
        $router->get('edit-profile/{id}',[UsersControlller::class,'editProfile']);
        $router->post('update-profile-post/{id}',[UsersControlller::class,'updateProfile']);
//update profile admin
//$router->get('edit-profile/{id}',[App\admin\controllers\UsersControlller::class,'editProfile']);
//$router->post('update-profile-post/{id}',[App\admin\controllers\UsersControlller::class,'updateProfile']);\
        $router->get('update-profile/{id}', [user::class, 'updateProfilepost']);
        $router->post('update-profile/{id}', [user::class, 'updateProfilepost']);
//Banner
        $router->get('manage-banner', [BannerController::class, 'banner']);
        $router->get('edit-banner/{id}', [BannerController::class, 'editBanner']);
        $router->post('edit-banner-post/{id}', [BannerController::class, 'editBannerPost']);

    }else {
        $router->get('update-profile/{id}', [user::class, 'updateProfilepost']);
        $router->post('update-profile/{id}', [user::class, 'updateProfilepost']);
    }
}

//login -register
$router->get('home', [homeuser::class, 'index']);
$router->get('sign-in', [user::class, 'index']);
$router->post('sign-in', [user::class, 'index']);
$router->get('sign-up',[user::class,'signup']);
$router->post('sign-up',[user::class,'signup']);
$router->get('sign-out',[user::class,'signout']);
$router->get('forgot',[user::class,'forgot']);
$router->post('forgot',[user::class,'forgot']);


$router->get('ourTeam',[user::class,'ourTeam']);
$router->get('detail/{id}',[user::class,'detailBlog']);
$router->get('contact',[user::class,'contact']);



//Client
//Home Monospa
$router->get('/',[homeuser::class,'homeList']);
$router->get('service',[homeuser::class,'serviceList']);
$router->get('about',[homeuser::class,'aboutList']);
$router->get('booking',[homeuser::class,'booking']);
$router->post('mockup-post',[homeuser::class,'mockupPost']);
//FQA
$router->get('blog-questions',[QuestionsController::class, 'blogQuestions']);
//Blog
$router->get('blog',[BlogServiceController::class, 'blogService']);
# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;


?>
