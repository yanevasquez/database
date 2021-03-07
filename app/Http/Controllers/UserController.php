<?php

namespace App\Http\Controllers;

use App\User;
class UserController extends Controller
{

    private $users;

    public function __construct(User $users)
    {
        $this->users = $users;
    }
    
    public function index()
    {
        // $users = $this->users->all();
        // $users = $this->users->where('name', 'Derick Oberbrunner')->get();
        // $users = $this->users->select('id')->distinct()->get();
        // $users = $this->users->where('meta->settings->site_language', 'en')->get();
        $users = $this->users->whereJsonContains('meta->skills', 'Laravel')->get();
        //    dd($users);
        return view('index', compact('users'));
    }
}
