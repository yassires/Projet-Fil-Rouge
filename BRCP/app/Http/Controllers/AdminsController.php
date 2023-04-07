<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class AdminsController extends Controller
{
    //
    public function index()
    {
        $cars = Car::orderBy('created_at', 'DESC')->paginate(10);
        return view('admins.dashboard',compact('cars'));
    }
}
