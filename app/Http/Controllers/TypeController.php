<?php

namespace App\Http\Controllers;

use App\Activity;
use App\Http\Traits\Chartable;
use App\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use JavaScript;

class TypeController extends Controller
{
    use Chartable;

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

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $attributes = $request->validate([
            "name" => 'string|required',
            "consumer_number" => 'required'
        ]);

        Type::create($attributes);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Type  $type
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Type $type)
    {
        $chartData = $this->buildChartData($type);
        $typeActivitiesList = $type->activity()->get();

        JavaScript::put(["amounts"=> Arr::flatten($chartData), "nameOfChart" => $type->name, 'typeActivitiesList'=>$typeActivitiesList]);
        return view('types.show', compact('type'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function edit(Type $type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Type $type)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function destroy(Type $type)
    {
        //
    }
}
