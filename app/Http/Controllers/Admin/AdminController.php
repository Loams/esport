<?php
namespace App\Http\Controllers\Admin;

class AdminController
{
    protected  $layout;

    public function __construct()
    {
        $this->layout = 'admin';
    }

    public function index()
    {
        return view($this->layout . '.index');
    }
}