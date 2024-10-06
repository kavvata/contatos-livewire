<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use App\Repositories\Repository;
use Illuminate\Http\Request;
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
        return view('contato.index', ['contatos' => $this->repository->all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Contato::create([
        //     'nome' => $request->input('nome'),
        //     'telefone' => $request->input('telefone'),
        // ]);

        // return route('contato');

        return $this->show(
            Contato::create([
                'nome' => $request->input('nome'),
                'telefone' => $request->input('telefone'),
            ])
        );
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
