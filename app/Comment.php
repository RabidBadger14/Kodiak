<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model {

    use SoftDeletes;

    protected $table = 'comments';

	protected $dates = ['deleted_at'];

    /**
     * Set Relationship to Article Table.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function article() {
        return $this->belongsTo('App\Article');
    }

    

}
