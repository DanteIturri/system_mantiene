<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\User;
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
        $this->middleware('permission:view-brach ', ['only' => ['index']]);
        $this->middleware('permission:create-brach', ['only' => ['create', 'store']]);
        $this->middleware('permission:edit-brach', ['only' => ['edit', 'update']]);
        $this->middleware('permission:deleted-brach', ['only' => ['destroy']]);
    }
    public function index()
    {
        $branchs = Branch::paginate();
        return view('branch.index', compact('branchs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('branch.create', [
            'branch' => new Branch,
            'user' => new User
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
        /* Validating the request. */
        // request()->validate([
        //     'name' => 'required',
        //     'address' => 'required',
        //     'complementary_data' => 'required',

        // ]);
        /* Creating a new branch with the data from the request. */
        Branch::create($request->all());
        return redirect()->route('branches.index');
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
    public function edit($id)
    {
        /* Finding the branch with the id of . */
        $branch = Branch::find($id);
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

        $branch->update($request->all());

        return redirect()->route('branches.index');
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
        return redirect()->route('branches.index');
    }
}
