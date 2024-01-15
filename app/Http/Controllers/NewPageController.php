<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Repositories\BaseRepositoryInterface;
use Illuminate\Http\Request;

class NewPageController extends Controller
{
    protected $newRepository;

    public function __construct(BaseRepositoryInterface $newRepository)
    {
        $this->newRepository = $newRepository;
    }

    public function index()
    {
        $news = $this->newRepository->all();

        return view('page.news', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $news = $this->newRepository->show($slug);
        if ($news) {
            return view('page.detailnews', compact('news'));
        } else {
            abort(404);
        }

    }

    public function search(Request $request)
    {
        $keyword = $request->keyword;
        $news = News::where('name', 'like', '%'.$keyword.'%')->get();

        return view('page.searchnews', compact('news', 'keyword'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
