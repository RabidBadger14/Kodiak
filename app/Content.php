<?php namespace App;

use Conner\Tagging\TaggableTrait;
use Illuminate\Database\Eloquent\Model;

class Content extends Model {

	protected $table = 'content';

    use SoftDeletes;

    use TaggableTrait;

    protected $dates = ['deleted_at','published_at'];

}
