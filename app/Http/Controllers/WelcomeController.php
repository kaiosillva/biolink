<?php 

namespace App\Http\Controllers;


class WelcomeController 

{
    Public function __invoke() {


        return view('welcome');
    }


}