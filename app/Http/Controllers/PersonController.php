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
        $query = Person::select(['people.*', 'doc_types.description as docdesc'])
        ->join('doc_types', 'people.doc_types', '=', 'doc_types.id')
        ->with('persontype')
        ->latest('people.id');

        if(request()->input('legal_name')) {
            $query->where('legal_name', 'LIKE', '%' . request()->input('legal_name') . '%');
        }

        if(request()->input('docdesc')) {
            $query->where('document_number', 'LIKE', '%' . request()->input('docdesc') . '%');
        }

        if(request()->input('perdesc')) {
            $query->whereHas('persontype', function ($q){
                $q->where("description", "LIKE", "%".request()->input('perdesc')."%");
            });
        }

        $people = $query->paginate(10)->withQueryString();

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
            $person_type_detail = new PersonTypeDetail(['person_id' => $data->id, 'person_type_id' => $value]);
            $person_type_detail->save();
        }

        return redirect('people');
    }

    /**
     * Display the specified resource.
     */
    public function show(Person $person)
    {
        $person->load('district.province.department');
        $person->load('persontype');

        return $person;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PersonRequest $request, Person $person)
    {
        $person->update($request->input());
        $person->persontype()->detach();

        foreach ($request->input()['persontype'] as $value) {
            $person_type_detail = new PersonTypeDetail(['person_id' => $person->id, 'person_type_id' => $value]);
            $person_type_detail->save();
        }

        return redirect('people');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Person $person)
    {
        $person->status = '0';
        $person->save();
        $person->delete();
        return redirect('people');
    }
}
