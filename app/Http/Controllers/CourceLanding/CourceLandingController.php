<?php

namespace App\Http\Controllers\CourceLanding;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Cource\CourceBuyClaim;

class CourceLandingController extends Controller
{
    public function index(Request $request)
    {
        $acceptCookies = $request->session()->exists('acceptCookies');
        return Inertia::render('CourceLanding/Index', compact('acceptCookies'));
    }

    public function buy(Request $request)
    {
        CourceBuyClaim::create(
            $request->validate([
                'name' => 'required|min:2|max:255',
                'surname' => 'required|min:2|max:255',
                'plan' => 'required|in:plan1,plan2',
                'phone' => 'required|size:18|regex:/^\+7 \(\d\d\d\) \d\d\d-\d\d-\d\d$/ui',
                'privacy_agree' => 'required|in:1'
            ])
        );

        return redirect(route('buy-cource'));
    }

    public function acceptCookies()
    {
        session(['acceptCookies' => 'true']);

        return redirect(route('buy-cource'));
    }
}
