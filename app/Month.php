<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Answer extends Model
{
    use SoftDeletes;
    //
	/**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'month';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id','name' ];

    public function getQuestion()
    {
        return $this->belongsTo('App\Question', 'question_id', 'id');
    }
}