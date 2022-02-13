<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Pizza;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PizzaController extends Controller


{
    //Display list of pizzas with tags
    public function index(){
     return Pizza::with('tags')->get(); 
    }

    //Register a new pizza
    public function store(Request $request){

        //return $request->all(); 

        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'price' => 'required',
        ]);

        // STORE IN THE DATABASE
        // Create a new pizza object
        $pizza = new Pizza(); 
        $pizza->title = $request->input('title');
        $pizza->content = $request->input('content');
        $pizza->price = $request->input('price');
        $pizza->user()->associate(Auth::user());
        $pizza->save();

        //Create tags 
        foreach ($request->tags as $key=>$value){
            $newTag = Tag::firstOrCreate([
            'name' => $value
            ]);  
        //Association pizza and tags
            $pizza->tags()->save($newTag);
        }
    
        return $pizza;
    }

    //Display a single pizza
    public function show($id){
        return Pizza::find($id);
    }

    //Update a single pizza
    public function update(Request $request, $id)
    {
        $pizza = Pizza::find($id);
        $pizza->update($request->all());
    }

    //Delete a single pizza
    public function destroy($id){
        return Pizza::destroy($id);
    }

    /* DISPLAY LISTS **/
    // Search by title
    public function search($title){
        return Pizza::where('title', 'like', '%' .$title. '%')->get();
    }

    //Search by tag
    public function searchByTag($tag){
        return Pizza::where('title', 'like', '%' .$tag. '%')->get();
    }
}

