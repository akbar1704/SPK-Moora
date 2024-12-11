<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view("adminHeader");
        echo view("adminNavbar");
        echo view("adminSidebar");
        echo view("Home");
        echo view("adminFooter");
    }
}
