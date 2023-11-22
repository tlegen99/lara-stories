<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Synergine\Template\Models\Template
 *
 * @property int $id ID
 * @property string $name Имя
 * @property string $body Описание
 * @property int $views
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 */
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

    public static function add($params)
    {
        $story = new static();
        $story->name = data_get($params, "name");
        $story->body = data_get($params, "body");
        $story->views = data_get($params, "views");
        $story->save();

        return $story;
    }

    public static function edit($id, $params)
    {
        $story = static::find($id);
        $story->name = data_get($params, "name");
        $story->body = data_get($params, "body");
        $story->views = data_get($params, "views");
        $story->save();

        return $story;
    }

    public static function remove($id)
    {
        $story = static::find($id);
        $story->delete();

        return true;
    }
}
