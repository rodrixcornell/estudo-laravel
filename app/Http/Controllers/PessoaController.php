<?php

namespace App\Http\Controllers;

use App\Pessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pessoa::paginate(10);
        return view('pessoas.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pessoas.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $validator = \Validator::make($request->all(), [
            'nome' => 'required|max:100',
            'telefone' => 'required|max:20',
            // 'email' => 'required|max:100|email|unique:pessoas',
            'email' => 'max:100|email|unique:pessoas',
        ]);

        if ($validator->fails()) {
            return redirect()->route('pessoas.create')->withErrors($validator)->withInput();
        }

        $data = new Pessoa();

        $data->nome = $request->nome;
        $data->telefone = $request->telefone;
        $data->email = $request->email;

        $data->save();

        return redirect()->route('pessoas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $pessoa = new Pessoa();
        $data = $pessoa->findOrFail($id);

        $delete = ($request->delete ?? false);
        return view('pessoas.show', compact('data', 'delete'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pessoa = new Pessoa();
        $data = $pessoa->findOrFail($id);

        return view('pessoas.form', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());

        $validator = \Validator::make($request->all(), [
            'nome' => 'required|max:100',
            'telefone' => 'required|max:20',
            'email' => 'required|string|email|max:100|unique:pessoas,email,' . $id,
        ]);

        if ($validator->fails()) {
            return redirect()->route('pessoas.edit', $id)->withErrors($validator)->withInput();
        }

		$data = Pessoa::findOrFail($id);

        $data->nome = $request->nome;
        $data->telefone = $request->telefone;
        $data->email = $request->email;

        $data->save();
        // $data->update($id);

        return redirect()->route('pessoas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pessoa::findOrFail($id);

        $data->delete();

        return redirect()->route('pessoas.index');   
    }
}
