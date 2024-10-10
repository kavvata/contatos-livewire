<?php

namespace App\Http\Controllers;

use App\Models\User;

class AdminDashboard extends Controller
{
    public function index()
    {
        $mapUserContatosCount = User::all()->map(function ($u) {
            return ['nome' => $u->name, 'contatos' => $u->contatos()->count()];
            // return [$u->name => $u->contatos()->count()];
        });

        return view('dashboard', ['userContatos' => $mapUserContatosCount]);
    }
}
