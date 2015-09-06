<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Violation extends Model {

	protected $fillable = ['number', 'region', 'url', 'description'];
	public $timestamps = false;

    public static function boot()
    {
        static::creating(function($model)
        {
            $model->created_at = $model->freshTimestamp();
        });
    }
}
