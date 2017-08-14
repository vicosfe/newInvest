<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;

class Project extends Model
{
    public static function getItem($id=0)
    {
        if ($id == 0)
            $items = Project::all();
        else
            $items = Project::where("cat_id", $id)->get();

        return $items;
    }

}
