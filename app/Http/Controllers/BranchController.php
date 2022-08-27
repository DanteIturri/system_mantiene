<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:view-brach | create-brach | edir-brach |deleted-brach', ['only' => ['index']]);
        $this->middleware('permission:create-brach', ['only' => ['create', 'store']]);
        $this->middleware('permission:edit-brach', ['only' => ['edit', 'update']]);
        $this->middleware('permission:deleted-brach', ['only' => ['destroy']]);
    }
    public function index()
    {
        $brachs = Branch::paginate();
        return view('branch.index', compact('brachs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('branch.create', [
            'branch' => new Branch
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'require',
            'address' => 'require',
            'complementary_data' => 'require',

        ]);
        Branch::create($request->all());
        return redirect()->route('branch.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function show(Branch $branch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function edit(Branch $branch)
    {
        return view('branch.edit', compact('branch'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Branch $branch)
    {
        request()->validate([
            'name' => 'require',
            'address' => 'require',
            'complementary_data' => 'require',
        ]);
        $branch->update($request->all());
        return redirect()->route('branch.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Branch $branch)
    {
        $branch->delete();
        return redirect()->route('branch.index');
    }
}
