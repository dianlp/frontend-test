<?php
namespace App\Controllers;
class User extends BaseController
{
    public function index()
    {
        $header['title']='User';
        echo view('template/header',$header);
        echo view('template/navbar');
        echo view('User_v');
    }
}
?>