<?php

namespace App\Http\Controllers;
use App\Models\Employe_of_the_month;

use Illuminate\Http\Request;

class EmployeOfTheMonthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("employeOfTheMonth");
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

        $employe = new Employe_of_the_month;
        $employe->name = $request["name"];
        $employe->email = $request["email"];

        $employe->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
