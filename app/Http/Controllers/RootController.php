<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class RootController extends Controller
{
    public function show(Request $request)
    {
        // Debug
        Log::info($_SERVER['REQUEST_URI']);

        // Set referrer cookie.
        if ($request->has('r')) {
            $ref = $request->input('r');
            Cookie::queue('r', $ref);
        }

        // Get the status from query string.
        if ($request->has('friendship_status_changed')) {
            if ($request->input('friendship_status_changed') == 'true') {
                Cookie::queue('friendship_status_changed', 1);
            }
        }

        $authUser = Auth::user();
        $now = $authUser->labo_time ?? date('Y-m-d H:i:s', time() );
        // $citys = DB::select('select * from city', [1]);
        // $citys = json_encode($citys);

        return view('react', [
            'appUrl' => config('app.url'),
            'assetUrl' => rtrim(secure_asset('/'), '/'),
            'appVer' => config('app.version'),
            'oaUrl' => config('services.line.oaUrl'),
            'oaChatUrl' => config('services.line.oaChatUrl'),
            'liffId' => config('services.line.liffId'),
            'liffUrl' => config('services.line.liffUrl'),
        ]);
    }
}
