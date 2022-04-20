<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Weight;

class WeightController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('weight.index', ['weights' => Weight::where('user_id', \Auth::id())->orderByDesc('date')->get() ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('weight.create', ['edit'=> false]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = \Auth::id();

        Weight::create(request()->validate([
            'user_id' => ['required', 'in:'.$user],
            'amount' => ['required', 'gt:100'],
            // I can't understand the unique rule but it works correctly :(
            // https://stackoverflow.com/questions/50349775/laravel-unique-validation-on-multiple-columns
            'date' => ['required', 'unique:weights,date,NULL,id,user_id,'.$user],
        ]));

        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Weight  $weight
     * @return \Illuminate\Http\Response
     */
    public function show(Weight $weight)
    {
        return redirect('/weight');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Weight  $weight
     * @return \Illuminate\Http\Response
     */
    public function edit(Weight $weight)
    {
        return view('weight.create', ['weight' => $weight, 'edit' => true]);
    }

    /**
     * Update the specified resource in storage.
     *

     * @param  \App\Models\Weight  $weight
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Weight $weight)
    {
        $weight->update(
            $request->validate([
                'amount' => ['required', 'numeric'],
                'date' => ['required','date']
            ])
        );
        return redirect('/weight');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Weight  $weight
     * @return \Illuminate\Http\Response
     */
    public function destroy(Weight $weight)
    {
        $weight->delete();
        return redirect('/weight');
    }
}
