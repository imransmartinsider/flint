<?php

namespace App\Controllers;

class HomeController
{
    public function index($params = [123,'imran','kashif'])
    {

    //    return customFunction6();
        // // Data to pass to the view
        $data = [
            'title' => 'Home Page',
            'params' => $params
        ];

        // // Render the view
         view('home',$data);
    }
}
