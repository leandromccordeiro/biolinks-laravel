<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLinkRequest;
use App\Http\Requests\UpdateLinkRequest;
use App\Models\Link;
use Illuminate\Support\Facades\Auth;

class LinkController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create( )
    {
        return view('links.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLinkRequest $request)
    {
        /** @var User $user */
        $user = Auth::user();

        $user->links()->create($request->validated());

        // Link::query()->create(
        //     array_merge(
        //         $request->validated(),
        //         ['user_id' => Auth::id()]
        //     )
        // );

        return to_route('dashboard');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Link $link)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLinkRequest $request, Link $link)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Link $link)
    {
        //
    }
}
