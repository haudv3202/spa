<?php
use Phroute\Phroute\RouteCollector;
use App\admin\controllers\HomeController;
use App\Controllers\AuthController;
use App\admin\controllers\UserDisplayController;
use App\admin\controllers\QuestionsController;
use App\admin\controllers\rankMemberController;
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
$router->get('admin', [App\Controllers\UsersController::class, 'showUser']);
//Category
$router->get('add-category', [App\admin\controllers\CategoryController::class, 'addCategory']);
$router->post('add-category-post', [App\admin\controllers\CategoryController::class, 'addCategoryPost']);
$router->get('edit-category/{id}', [App\admin\controllers\CategoryController::class, 'editCategory']);
$router->post('update-category/{id}', [App\admin\controllers\CategoryController::class, 'updateCategoryPost']);
$router->get('delete-category/{id}', [App\admin\controllers\CategoryController::class, 'deteleCategory']);
$router->get('service-category', [App\admin\controllers\CategoryController::class, 'tableCategory']);
$router->get('detail-category/{id}', [App\admin\controllers\ServiceController::class, 'listServiceIdCate']);
//Service
$router->get('service-list', [App\admin\controllers\ServiceController::class, 'listService']);
$router->post('add-service-post', [App\admin\controllers\ServiceController::class, 'addServicePost']);
//$router->get('edit-service-cate/{id}', [App\admin\controllers\CategoryController::class, 'editService']);
//$router->post('update-service-cate/{id}', [App\admin\controllers\CategoryController::class, 'updateServicePost']);
//$router->get('delete-service-cate/{id}', [App\admin\controllers\CategoryController::class, 'deteleService']);
$router->get('/log-out', function () {
    $_SESSION["login"] = false;
    setcookie("email",$_POST["email"],time()-86401,'/');
    setcookie("pass",$_POST["password"],time()-86401,'/');
    header("location:./");
});
$router->get('edit-service/{id}', [App\admin\controllers\ServiceController::class, 'editService']);
$router->post('update-service/{id}', [App\admin\controllers\ServiceController::class, 'updateServicePost']);
$router->get('delete-service/{id}', [App\admin\controllers\ServiceController::class, 'deteleService']);
$router->get('detail-service/{id}', [App\admin\controllers\BlogServiceController::class, 'listBlogSvIdCate']);
//Blog Service
$router->get('service-blog', [App\admin\controllers\BlogServiceController::class, 'listBlogSv']);
$router->get('add-blog-service', [App\admin\controllers\BlogServiceController::class, 'addBlogSv']);
$router->post('add-blog-service-post', [App\admin\controllers\BlogServiceController::class, 'addBlogSvPost']);
$router->get('edit-blog-service/{id}', [App\admin\controllers\BlogServiceController::class, 'editBlogSv']);
$router->post('update-blog-service/{id}', [App\admin\controllers\BlogServiceController::class, 'updateBlogSvPost']);
$router->get('delete-blog-service/{id}', [App\admin\controllers\BlogServiceController::class, 'deleteBlogSv']);
$router->get('detail-blog-service/{id}', [App\admin\controllers\BlogServiceController::class, 'detailBlogSv']);
//Staff
$router->get('staff-list', [App\admin\controllers\StaffController::class, 'listStaff']);
$router->get('edit-staff/{id}', [App\admin\controllers\StaffController::class, 'editStaff']);
$router->post('update-staff-post/{id}', [App\admin\controllers\StaffController::class, 'updateStaffPost']);
//Reply
$router->get('reply-list', [App\admin\controllers\ReplyController::class, 'listReply']);
$router->get('delete-reply/{id}', [App\admin\controllers\ReplyController::class, 'deleteReply']);
//Endow
$router->get('endow-list', [App\admin\controllers\EndowController::class, 'listEndow']);
$router->get('delete-endow/{id}', [App\admin\controllers\EndowController::class, 'deleteEndow']);
//Statistic
$router->get('statistic-list', [App\admin\controllers\StatisticController::class, 'listStatistic']);


//giao-dien
$router->get('contact-us', [UserDisplayController::class, 'index']);
$router->get('quan-li-khach-hang', [UserDisplayController::class, 'index']);
$router->get('instagram', [UserDisplayController::class, 'insta']);
$router->get('edit-contact/{id}', [UserDisplayController::class, 'edit']);
$router->get('edit-insta/{id}', [UserDisplayController::class, 'editInsta']);
$router->post('update-contact/{id}', [UserDisplayController::class, 'update']);
$router->post('update-insta/{id}', [UserDisplayController::class, 'updateInsta']);
$router->get('questions', [QuestionsController::class, 'index']);
//newletters
$router->get('newletters',[App\controllers\NewlettersController::class ,'index']);
$router->get('add-newletters', [App\controllers\NewlettersController::class, 'addNewletters']);
$router->post('add-newletters-post', [App\controllers\NewlettersController::class, 'addNewlettersPost']);
$router->get('edit-newletters/{id}', [App\controllers\NewlettersController::class, 'edit']);
$router->post('update-newletters/{id}', [App\controllers\NewlettersController::class, 'update']);
$router->get('delete-newletters/{id}', [App\controllers\NewlettersController::class, 'deleteNewletters']);
//question
$router->get('add-question', [QuestionsController::class, 'addQuestion']);
$router->post('add-question', [QuestionsController::class, 'addQuestionPost']);
$router->get('edit-question/{id}', [QuestionsController::class, 'editQuestion']);
$router->post('edit-question/{id}', [QuestionsController::class, 'updateQuestion']);
$router->get('delete-question/{id}', [QuestionsController::class, 'deleteQuestion']);
$router->get('blog-question/{id}',[QuestionsController::class, 'blogQuestion']);

//ql user
$router->get('user', [App\admin\controllers\UsersControlller::class, 'showUser']);
$router->get('search/{value}', [App\admin\controllers\UsersControlller::class, 'search']);

$router->get('add_user', [App\admin\controllers\UsersControlller::class, 'addUser']);
$router->post('add_user', [App\admin\controllers\UsersControlller::class, 'addUser']);

$router->get('chi-tiet-nguoi-dung', [App\admin\controllers\UsersControlller::class, 'detailUser']);
$router->get('add-serivce-user/{id}', [App\admin\controllers\UsersControlller::class, 'addServiceUser']);
$router->get('add-serivce-user/add-detailUser/{id}', [App\admin\controllers\UsersControlller::class, 'getservice']);
$router->get('editServiceUser/add-detailUser/{id}', [App\admin\controllers\UsersControlller::class, 'getservice']);
$router->post('add-serivce-user/{id}', [App\admin\controllers\UsersControlller::class, 'addServiceUser']);
$router->get('delete-user/{id}', [App\admin\controllers\UsersControlller::class, 'deleteUser']);
$router->get('update-user/{id}', [App\admin\controllers\UsersControlller::class, 'updateUser']);
$router->post('update-user/{id}', [App\admin\controllers\UsersControlller::class, 'updateUser']);
$router->get('list-user', [App\Controllers\UsersController::class, 'index']);
$router->get('update-profile/{id}', [App\Controllers\UsersController::class, 'updateProfile']);
$router->post('update-profile/{id}', [App\Controllers\UsersController::class, 'updateProfilepost']);
//xóa chi tiết chi tiết thanh toán
$router->get('delete-detail-user/{id}/{backpage}', [App\admin\controllers\UsersControlller::class, 'deleteServiceUser']);
//quản lí loại khách
$router->get('list-rank', [App\admin\controllers\rankMemberController::class, 'index']);
$router->get('delete-rank/{id}', [App\admin\controllers\rankMemberController::class, 'deleteRank']);
$router->get('add-rank', [App\admin\controllers\rankMemberController::class, 'addRank']);
$router->post('add-rank', [App\admin\controllers\rankMemberController::class, 'addRank']);
$router->get('edit-rank/{id}', [App\admin\controllers\rankMemberController::class, 'editRank']);
$router->post('edit-rank/{id}', [App\admin\controllers\rankMemberController::class, 'editRank']);
//login -register
$router->get('home', [App\Controllers\HomeController::class, 'index']);
$router->get('sign-in', [App\Controllers\UsersController::class, 'index']);
$router->post('sign-in', [App\Controllers\UsersController::class, 'index']);
$router->get('sign-up',[App\Controllers\UsersController::class,'signup']);
$router->post('sign-up',[App\Controllers\UsersController::class,'signup']);
$router->get('edit-profile/{id}',[App\Controllers\UsersController::class,'editProfile']);
$router->post('update-profile/{id}',[App\Controllers\UsersController::class,'updateProfile']);

//Client
//Home Monospa
$router->get('/',[App\Controllers\HomeController::class,'homeList']);

$router->post('mockup-post',[App\Controllers\HomeController::class,'mockupPost']);

# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;


?>
