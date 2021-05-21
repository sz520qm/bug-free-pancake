<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function index() 
    {
        $reviews = Review::orderBy('room')->get() ;
        if (Auth::user()->hasRole('user')) {
            return view('userdash');
        } elseif (Auth::user()->hasRole('blogwriter')) {
            return view('blogwriterdash');
        } elseif (Auth::user()->hasRole('admin')) {
            return view('reviews.index', [
            'reviews' => $reviews,
       

        ]);
        }
    }

    public function show($id) 
    {
        $review = Review::findOrfail($id);
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