<?php namespace App\Data\Models;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;

class Page extends Model implements SluggableInterface {

    use SluggableTrait;

    protected $fillable = ['title', 'slug'];

    protected $sluggable = array(
        'build_from' => 'title',
        'save_to'    => 'slug',
    );
}
