<?php

namespace App\Http\Controllers;

use App\Domain;
use Illuminate\Http\Request;

class DomainController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function store(Request $request)
    {
        $domain = new Domain();

        $this->validate($request, [
            'name' => 'required|url|unique:domains'
        ]);

        $domain->fill($request->all());
        $domain->save();
        return redirect()->route('domains.show', ['id' => $domain->id]);
    }
    
    public function show($id)
    {
        $domain = Domain::findOrFail($id);
        return view('domains.show', compact('domain'));
    }
}
