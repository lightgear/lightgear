<?php namespace App\Http\Controllers\Content;

use Illuminate\Routing\Controller;

use App\Data\Models\Page;
use App\Http\Requests\Pages\FormRequest;

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
    public function create(Page $page)
    {
        return view('pages.create', ['page' => $page]);
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(FormRequest $request, Page $page)
    {
        $page->create($request->all());

        return redirect('pages');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     */
    public function show($page)
    {
        return view('pages.show', ['page' => $page]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     */
    public function edit($page)
    {
        return view('pages.edit', ['page' => $page]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     */
    public function update(FormRequest $request, Page $page)
    {
        $page->update($request->all());

        return redirect('pages');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $page
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @internal param int $id
     */
    public function destroy($page)
    {
        $page->delete();

        return redirect('pages');
    }
}
