<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Mail\CarrerRequestMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('home', 'test');
    }

    public function home()
    {

        $articles = Article::where('is_accepted', true)->orderBy('created_at', 'desc')->take(4)->get();
        return view('homepage', compact('articles'));
    }

    public function careers()
    {
        return view('careers');
    }

    public function careerSubmit(Request $request)
    {
        $request->validate([
            'role' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);

        $user = Auth::user();
        $role = $request->role;
        $email = $request->email;
        $message = $request->message;

        Mail::to('admin@thepost.it')->send(new CarrerRequestMail(compact('role', 'email', 'message')));

        switch ($role) {
            case 'admin':
                $user->is_admin = NULL;
                break;
            case 'revisor':
                $user->is_revisor = NULL;
                break;
            case 'writer':
                $user->is_writer = NULL;
                break;
        }

        $user->update();

        return redirect(route('home'))->with('message', 'Grazie per averci contattato!');
    }


    public function test(){
        return view('test');
    }
}


