<?php
require_once '../../../env.php';
require_once '../../../vendor/autoload.php';
use App\models\questions;
if(isset($_FILES['upload']['name'])){
  $target_dir = "../../../public/upload/blogSv/";
  $name = time() .$_FILES["upload"]["name"];
  $target_file = $target_dir . $name;
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    echo "<script>
        alert('Xin lỗi ảnh phải có định dạng JPG, JPEG, PNG & GIF .')
    </script>";
    $uploadOk = 0;
  }else {
    move_uploaded_file($_FILES["upload"]["tmp_name"],$target_file);
    $img_old = questions::findOne($id)->image;
    if(file_exists('./public/upload/blogSv/' .$img_old)){
      unlink('./public/upload/blogSv/' .$img_old);
    }
    $funcNum = $_GET['CKEditorFuncNum'] ;
    $CKEditor = $_GET['CKEditor'] ;
    $langCode = $_GET['langCode'] ;
    $url= '../public/upload/blogSv/' .$name;
    $message = '';
    echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction('$funcNum', '$url', '$message');</script>";
    echo "<script>
        alert('Upload thành công')
    </script>";
  }


}
