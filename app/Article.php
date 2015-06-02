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

    /**
     * Set Relationship to Users Table.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Set Relationship to Comment Table.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {

        return $this->hasMany('App\Comment');

    }


}
