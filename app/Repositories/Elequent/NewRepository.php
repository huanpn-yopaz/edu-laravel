<?php

namespace App\Repositories\Elequent;

use App\Repositories\NewRepositoryInterface;

class NewRepository extends BaseRepository implements NewRepositoryInterface
{
    public function getNew()
    {
        return $this->model->get();
    }
}
