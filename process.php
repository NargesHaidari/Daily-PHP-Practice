
<?php

$errors = [];

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);

    if(empty($name)){
        $errors[] = 'فیلد نام نباید خالی باشد';
    }

    if(empty($email)){
        $errors[] = 'فیلد ایمیل نباید خالی باشد';
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors[] = 'مقدار ایمیل نامعتبر است';
    }

    if(count($errors) === 0){
        echo 'اطلاعات شما با موفقیت ثبت شد' . '<br>';
    }else{
        foreach($errors as $error){
            echo $error . '<br>';
        }
    }

    echo htmlspecialchars($name) . '<br>';
    echo htmlspecialchars($email);

}