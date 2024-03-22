<?php

namespace App\Http\Controllers;

use App\Models\ActaEntrega;
use App\Models\ActuacionFiscal;
use App\Models\PersonalEntrega;
use App\Models\PersonalRecibe;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $data = [
            'users' => User::all(),
            'activities' => ActuacionFiscal::all(),
            'handoverRecords' => ActaEntrega::all(),
            'outgoing' => PersonalRecibe::all(),
            'incoming' => PersonalEntrega::all(),
        ];
        
        return view('index', $data);
    }

    public function actaUsers()
    {
        return json_encode(User::all());
    }
}
