<?php namespace App\Http\Controllers;

class MovieController extends Controller
{
    
    public function showData($id)
    {
        echo 'id = '.$id.'<br>';
    }
}