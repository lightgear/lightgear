<?php namespace App\Http\Controllers\Content;

use Illuminate\Routing\Controller;

use App\Data\Models\Page;
use App\Http\Requests\PageFormRequest;

class Pages extends Controller {

    /**
     * Display a listing of the resource.
     *
     */
    public function index(Page $page)
    {
        return view('pages.index', ['pages' => $page->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return 'Create page form';
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(PageFormRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     */
    public function show($page)
    {
        dd($page->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id)
    {
        //
    }
}
