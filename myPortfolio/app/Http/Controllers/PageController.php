<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        $intro="Hi - I'am Harsh Jaiswal, a software engineer.";
        return view('home',compact('intro'));
    }

    public function about()
    {
        $bio="I build software that solve the problems";
        return view('about', compact('bio'));
    }

    public function projects(){
        $projects=[
            ['slug' => 'todo-app', 'title' => 'Todo App', 'summary' => 'Simple task manager.'],
            ['slug' => 'blog-site', 'title' => 'Blog Site', 'summary' => 'A full blog layout.'],
            ['slug' => 'portfolio', 'title' => 'Portfolio', 'summary' => 'This portfolio project.']
        ];
        return view('projects',compact('projects'));
    }

    public function project($slug){
         $items = [
            'todo-app' => ['title' => 'Todo App', 'content' => 'A task manager built with Laravel.'],
            'blog-site' => ['title' => 'Blog Site', 'content' => 'Blog engine with posts & comments.'],
            'portfolio' => ['title' => 'Portfolio', 'content' => 'Personal portfolio built with Blade.'],
        ];
        if(!array_key_exists($slug,$items)){
            abort(404);
        }
        $project=$items[$slug];
        return view('project',compact('project'));
    }

    public function contact(){
        return view('contact');
    }

    public function submitContact(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
     $contacts = session('contacts', []);
        $contacts[] = $request->only(['name','email','message']);
        session(['contacts' => $contacts]);

        return redirect()->route('contact')->with('success', 'Thanks! Your message was received.');
    }
}
