<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MeController extends Controller
{
    public function __invoke(Request $request)
    {
        $user = User::find(1);
        $user->name = $request->get('name', default: 'Noname');
        $user->save();
        return 'hello epta, '. $request->get('name', default: 'Noname');
    }
}

