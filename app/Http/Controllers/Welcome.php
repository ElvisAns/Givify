<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;
use App\models\User;

class Welcome extends Controller
{
    public function welcome()
    {
        $all_users_informations = User::with('usercontributions.paymentEndpoint')->get();
        $totalFunds = DB::table('users_contributions')
                        ->join('payment_endpoints', 'users_contributions.payment_endpoint_id', '=', 'payment_endpoints.id')
                        ->select('payment_endpoints.accepted_currency', DB::raw('SUM(users_contributions.montant) as total_amount'))
                        ->where('users_contributions.confirmed', true)
                        ->groupBy('payment_endpoints.accepted_currency')->get();
        $users_with_subscription = User::where('montant_souscrit', '>', 0)->count();

        return Inertia("Home/Index", [
            'users' => $all_users_informations,
            'totalFunds' => $totalFunds,
            'totalSubscribers' => $users_with_subscription
        ]);
    }
}
