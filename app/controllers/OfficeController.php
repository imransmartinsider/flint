<?php

namespace App\Controllers;

class OfficeController
{
    public function index()
    {
        return 'Office Home Page';
    }

    public function show($id)
    {
        return 'Showing details for office ID: ' . $id;
    }
}
