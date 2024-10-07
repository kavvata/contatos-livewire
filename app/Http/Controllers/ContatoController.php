<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use App\Repositories\Repository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ContatoController extends Controller
{
    private Repository $repository;

    public function __construct(Repository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $contatos = Auth::user()->contatos()->orderBy('nome')->get();

        return view('contato.index', ['contatos' => $contatos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contato.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => ['required', 'max:255'],
            'telefone' => ['required', 'max:20'],
        ]);

        $novoContato = new Contato;

        $novoContato->nome = $request->input('nome');
        $novoContato->telefone = $request->input('telefone');
        $novoContato->user()->associate(Auth::user());

        $novoContato->save();

        return to_route('contato.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contato $contato)
    {
        return $contato;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contato $contato): View
    {
        return view('contato.edit', ['contato' => $contato]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contato $contato)
    {
        $request->validate([
            'nome' => ['required', 'max:255'],
            'telefone' => ['required', 'max:20'],
        ]);

        if ($request->input('nome') == 'Gabriel') {
            return back()->withErrors('Gabriel nn pode po');
        }

        $details = [
            'nome' => $request->input('nome'),
            'telefone' => $request->input('telefone'),
        ];

        $contato->update($details);
        // $result = $this->repository->update($contato, $details);

        return to_route('contato.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contato $contato)
    {
        //
    }
}
