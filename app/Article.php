<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    public static function getItem($id=0)
    {
        if ($id == 0)
            $items = Article::all();
        else
            $items = Article::where("cat_id", $id)->get();

        return $items;
    }

    public static function getItemOne($id=1)
    {
            $item = Article::find($id);

        return $item;
    }


}
