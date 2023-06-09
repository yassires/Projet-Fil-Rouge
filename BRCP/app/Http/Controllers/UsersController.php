<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Car;
use Illuminate\Support\Facades\Auth;
use stdClass;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
        $id = Auth::user()->id;
        $reservations = Reservation::where('user_id', $id)->get();
        $cars = [];
        foreach($reservations as $reservation){
            $car = Car::where('id',$reservation->car_id )->first();
            $obj = new stdClass();
            $obj->id = $reservation->id;
            $obj->pick_up_date = $reservation->rent_date_start;
            $obj->drop_of_date = $reservation->rent_date_end;
            $obj->price = $reservation->price_rent;
            $obj->brand = $car->Brand->name;
            $obj->category = $car->Category->name;

            $cars[] = $obj;

        }
        return view('auth.show', compact('cars'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
