<?php

namespace App\Http\Controllers\ShopLanding;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ShopLandingController extends Controller
{
    public function index()
    {
        return Inertia::render('Lending/Index');
    }
}
