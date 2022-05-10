<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class LabourController extends Controller
{
    public function index()
    {
        return Inertia::render('Create_labour');
    }
}
