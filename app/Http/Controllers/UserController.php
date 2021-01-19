<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $users = $this->users->all();
        //$users = $this->users->where('name', 'Derick Oberbrunner')->get();
        //$users = $this->users->select('id')->distinct()->get();
        return view('index', compact('users'));
    }
}
