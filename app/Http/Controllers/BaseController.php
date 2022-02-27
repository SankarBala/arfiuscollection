<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function category()
    {
        return view('category');
    }

    public function categories()
    {
        return view('categories');
    }

    public function post()
    {
        return view('post');
    }

    public function search()
    {
        return view('search');
    }

    public function contactUs()
    {
        return view('contact-us');
    }

    public function aboutUs()
    {
        return view('about-us');
    }

    public function subscription(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:subscriptions',
        ]);

        $subscription = new Subscription();
        $subscription->email = $request->email;
        $subscription->save();

        return response()->json(['message' => 'Subscription successful'], 201);
    }
}
