<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    public function getIndex () {
        $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
    	return view('pages.index')->withPosts($posts);
    }

    public function getAbout () {
    	$firstname = "Goran";
    	$lastname = "Ugrai";
    	$full = $firstname . " " . $lastname;
    	$email = "goran@example.com";

    	$data = [
    		'email' => $email,
    		'full'  => $full
    	];

    	return view('pages.about')->withData($data);
    }

    public function getContact () {
    	 return view('pages.contact');
    }
}
