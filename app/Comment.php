<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model {

    use SoftDeletes;

    protected $table = 'comments';

	protected $dates = ['deleted_at'];

}
