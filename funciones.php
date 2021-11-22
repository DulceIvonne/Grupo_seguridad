<?php

require 'php/bd.php';

function pr($arr){
    echo '<pre>';
    print_r($arr);

}

function prx($arr){

    echo '<pre>';
    print_r($arr);
    die();
}

function get_safe_value($mysqli, $str){

    if($str !=''){
        return mysqli_real_escape_string($mysqli, $str);
    }
}

/*
require('bd.php');
require('funciones.php');

    $msg='';


    if(isset($_POST['submit'])){
    echo $username = get_safe_value($mysqli, $_POST['usarname']);
    echo $password = get_safe_value($mysqli, $_POST['password']);
    $sql = "select * from admin_users where username='$username' and password='$password'";
    $res=mysqli_query($mysqli, $sql);
    $count=mysqli_num_rows($res);
    if($count>0){

        }else{
            $msg="please enter correct login details";
        }

        
    }

    </form>
        <?php
           <div class="field_error"> echo $msg; </div>
        
        ?>

        css----

        .field_error
        {
            color: red;
            margin-top: 15px;
        }
*/ 

?>