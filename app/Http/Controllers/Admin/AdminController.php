<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::count();
        $services = Service::count();
        $categories = Category::count();
        $contacts = Contact::latest()->get();

        return view('admin.index',compact('users','services','categories','contacts'));
    }
}
