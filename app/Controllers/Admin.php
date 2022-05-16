<?php
namespace App\Controllers;
class Admin extends BaseController
{
    public function index()
    {
        $header['title']='Admin';
        echo view('template/header',$header);
        echo view('template/navbar');
        echo view('Admin_v');
        echo view('modal_tambah');
        echo view('modal_edit');
    }
}
?>