<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function getHome() {
      $oddNumbers = [];

      for ($i=10; $i<101; $i++) {
        if ($i % 2 != 0) {
          $oddNumbers[] = $i;
        }
      }
      $numberOfNumbers = count($oddNumbers);
      return view('home', compact('oddNumbers', 'numberOfNumbers'));
    }
}
