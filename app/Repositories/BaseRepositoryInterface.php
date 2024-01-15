<?php

// app/Repositories/PostRepositoryInterface.php

namespace App\Repositories;

use Illuminate\Http\Request;

interface BaseRepositoryInterface
{
    public function all();

    public function find(string $id);

    public function show(string $slug);

    public function create(Request $request);

    public function update(Request $request, string $id);

    public function delete(string $id);
}
