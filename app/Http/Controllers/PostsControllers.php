<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsControllers extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
			return "It`s working id is: ";
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
    public function show(string $id)
    {
			return "It`s working id is: ". $id;
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

		public function contact() {
			$people = ['Mykola', 'Ivan', 'Semen', 'Maria', 'Pablo'];


			return view('contact', compact('people'));
		}

		public function show_post($id) {
			

			return view('post', compact('id'));
		}
}
