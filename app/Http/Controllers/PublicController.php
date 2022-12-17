<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Mail\RequestRoleMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function welcome () {
        
        $articles = Article::where('is_accepted', true)->orderBy('created_at', 'desc')->take(6)->get();
        
        return view ('welcome', compact('articles'));
    }
    
    public function workWithUs () {
        return view ('work-with-us');
    }
    
    public function sendRoleRequest(Request $request) {
        $user = Auth::user();
        $role = $request->input('role');
        $email = $request->input('email');
        $reason = $request->input('reason');
        $requestMail = new RequestRoleMail(compact('role', 'email', 'reason'));
        Mail::to('admin@theaulabpost.it')->send($requestMail);
        switch ($role) {
            case 'admin': $user->is_admin = NULL;
            break;
            case 'revisor': $user->is_revisor = NULL;
            break;
            case 'writer': $user->is_writer = NULL;
            break;
        }

        $user->update();
        return redirect()->route('welcome')->with('message', 'Grazie per averci contattato');
    }
}
