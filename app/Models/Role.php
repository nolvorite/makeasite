<?php
namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Role
 *
 * @package App
 * @property string $title
*/
class Role extends Model
{
    use SoftDeletes;

    protected $fillable = ['title'];

    public static function boot()
    {
        parent::boot();

        Role::observe(new \App\Observers\UserActionsObserver);
    }
}
