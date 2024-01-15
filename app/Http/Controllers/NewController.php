<?php

namespace App\Http\Controllers;

use App\Repositories\BaseRepositoryInterface;
use Illuminate\Http\Request;

class NewController extends Controller
{
    protected $newRepository;

    public function __construct(BaseRepositoryInterface $newRepository)
    {
        $this->newRepository = $newRepository;
    }

    public function index()
    {
        $news = $this->newRepository->all();

        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->newRepository->create($request);

        return redirect()->route('news.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $news = $this->newRepository->find($id);

        return view('admin.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $this->newRepository->update($request, $id);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->newRepository->delete($id);

        return back();
    }
}
