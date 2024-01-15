<?php

// app/Repositories/PostRepository.php

namespace App\Repositories\Elequent;

use App\Models\News;
use App\Repositories\BaseRepositoryInterface;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BaseRepository implements BaseRepositoryInterface
{
    use ImageTrait;

    protected $model;

    public function __construct(News $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function find(string $id)
    {
        return $this->model->find($id);
    }

    public function show(string $slug)
    {
        return $this->model->where('slug', $slug)->first();
    }

    public function create(Request $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        $data['author'] = Auth::user()->name;
        $file = $request->file('image');
        $filedata = $this->uploads($file);
        $data['image'] = $filedata['filePath'];

        return $this->model->create($data);
    }

    public function update(Request $request, string $id)
    {
        $news = $this->model->find($id);
        $path = $news->image;
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        $data['author'] = Auth::user()->name;
        if ($file = $request->file('image')) {
            $this->deleteFile($path);
            $filedata = $this->uploads($file);
            $data['image'] = $filedata['filePath'];
        }

        return $news->update($data);
    }

    public function delete(string $id)
    {
        $new = $this->model->find($id);
        $path = $new->image;
        $this->deleteFile($path);
        $new->delete();
    }
}
