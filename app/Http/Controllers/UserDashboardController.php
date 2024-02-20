<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function homePage()
    {
        return view('umum.dashboard.index');
    }

    public function curiculumPage()
    {
        return view('umum.dashboard.curiculum');
    }


    public function studentshipPage()
    {
        return view('umum.dashboard.studentship');
    }


}
