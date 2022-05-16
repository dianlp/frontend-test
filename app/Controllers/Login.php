<?php
namespace App\Controllers;
class Login extends BaseController
{
    public function index()
    {
        $header['title']='Login';
        echo view('template/header',$header);
        
        echo view('Login_v');
    }
}
?>