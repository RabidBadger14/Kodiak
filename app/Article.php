<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

    use \Conner\Tagging\TaggableTrait;
    use SoftDeletes;

    protected $table = 'articles';

    protected $dates = [
        'published_at',
        'deleted_at'
    ];

}
