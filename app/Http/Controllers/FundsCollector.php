<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class FundsCollector extends Controller
{
    public function welcome()
    {
        return Inertia("Home/Index", [
            'users' => [],
            'totalFUnds' => 120,
            'totalSubscribers' => 29
        ]);
    }
}
