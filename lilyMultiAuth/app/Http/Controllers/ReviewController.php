<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index() 
    {
        //   $reviews = Review::all() ;
        $reviews = Review::orderBy('room')->get() ;

        // $reviews = Review::latest()->get() ;
     
    
        return view('reviews.index', [
            'reviews' => $reviews,
       

            'name' => request('name'),
            'age' => request('age')
        ]);
    }

    public function show($id) 
    {
        $review = Review::findOrfail($id);
        return view('reviews.show', ['review' =>$review]);
    }

    public function createRs() 
    {
        return view('reviews.rs-create');
    }

    public function create() 
    {
        return view('dashboard.postcreate');
    }
    
    public function store() 
    
    
    {

        $review = new Review();
        $review->name = request('name');
        $review->room = request('room');
        $review->bedroom = request('bedroom');
        $review->bathroom =  request('bathroom');
        $review->livingroom = request('livingroom');
        $review->kitchen =  request('kitchen');
        $review->flunks = request('flunks');
 

        $review->save();

        
        return redirect('/dashboard')->with('mssg', 'Thanks for your review! - Ð¡Ð¿Ð°ÑÐ¸Ð±Ð¾ Ð·Ð° Ð¾Ñ‚Ð·Ñ‹Ð²!');
    }

    public function destroy($id) 
    {
        $review = Review::findOrFail($id);
        $review->delete();

        return redirect('/dashboard');
    }
}