<?php
namespace Furbook;
use Illuminate\Database\Eloquent\Model;

class Breed extends Model
{

    protected $fillable = ['name'];
    public $timestamps = false;
    public function cats() {
        return $this->hasMany('Furbook\Cat');
    }
}