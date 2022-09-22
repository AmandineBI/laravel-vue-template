<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RedirectAuthenticatedUsersController extends Controller
{
    public function home()
    {
        if (auth()->user()->is_admin) {
            return redirect('/adminDashboard');
        }
        elseif(auth()->check()){
            return redirect('/userDashboard');
        }
        else{
            return redirect('/guestDashboard');
        }
    }
}
