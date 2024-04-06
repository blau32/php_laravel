<?php

function validation($request){

    $errors = [];

    if(empty($request['your_name']) ||20 < mb_strlen($request['your_name'])){
        $errors[] = 'your name is necessary. write within 20 word limit ';
    }

    if(empty($request['email']) || !filter_var($request['email'], FILTER_VALIDATE_EMAIL)){
        $errors[] = 'email address is necessary. Please type correctly';
    }

    
    if(!empty($request['url'])){
       if(!filter_var($request['url'], FILTER_VALIDATE_URL)){
        $errors[] = 'Please type URL correctly';
       }
        
    }

    if(empty($request['contact']) ||200 < mb_strlen($request['contact'])){
        $errors[] = 'contact is necessary. write within 200 word limit ';
    }

    if(!isset($request['gender'])){
        $errors[] = 'gender is necessary';
    }

    if(!isset($request['age']) || 6 < $request['age']){
        $errors[] = 'age is necessary';
    }

    if(empty($request['caution'])){
        $errors[] = 'Please check caution';
    }

    return $errors;
}

?>