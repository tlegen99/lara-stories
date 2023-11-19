<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stories extends Model
{
    use HasFactory;

    /**
     * @inheritdoc
     */
    protected $table = "stories";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "name",
        "body",
    ];

    public static function add(array $params)
    {
        $stories = new static();
        $stories->name = data_get($params, "name");
        $stories->body = data_get($params, "body");
        $stories->views = data_get($params, "views");
        $stories->save();

        return $stories;
    }
}
