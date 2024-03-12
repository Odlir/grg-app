<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonRequest;
use App\Http\Resources\PersonResource;
use App\Models\Person;
use App\Models\PersonTypeDetail;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $people = Person::select(['people.*', 'doc_types.descripcion as docdesc'])
            ->join('doc_types', 'people.doc_types', '=', 'doc_types.id')
            ->with('persontype')
            ->latest('people.id')
            ->paginate(10);

        return Inertia::render('People/Index', [
            'people' => $people
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PersonRequest $request)
    {
        $data = new Person($request->input());
        $data->save();

        foreach ($request->input()['persontype'] as $value) {
            $detalle_tipo_persona = new PersonTypeDetail(['person_id' => $data->id, 'person_type_id' => $value]);
            $detalle_tipo_persona->save();
        }

        return redirect('people');
    }

    /**
     * Display the specified resource.
     */
    public function show(Person $person)
    {
        $person->load('distrito.provincia.departamento');
        $person->load('persontype');

        return $person;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Person $person)
    {
        $person->update($request->input());
        return redirect('people');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Person $person)
    {
        $person->estado = '0';
        $person->save();
        $person->delete();
        return redirect('people');
    }
}
