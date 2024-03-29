<?php

namespace App\Http\Controllers\CourceLanding;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Cource\CourceBuyClaim;
use App\Jobs\CourceLanding\SendTelegrammClaimMessage;
use Illuminate\Support\Facades\Log;

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

        try {
            $planDescription = '';

            switch ($request->plan) {
                case 'plan1':
                    $planDescription = 'Тариф “Шоколад для себя”';
                    break;
                case 'plan2':
                    $planDescription = 'Тариф “Бизнес на шоколаде”';
                    break;
            }
            SendTelegrammClaimMessage::dispatch(
                "$request->name $request->surname $request->phone оформил(а) заявку. $planDescription."
            );
        } catch (\Exception $e) {
            Log::error($e);
        }

        return redirect(route('buy-cource'));
    }

    public function acceptCookies()
    {
        session(['acceptCookies' => 'true']);

        return redirect(route('buy-cource'));
    }
}
