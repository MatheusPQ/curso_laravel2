<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Post extends Model
{
    // protected $table = 'nomeTabela';

    // public static function greaterThan($number){
    //     return self::where('id', '>', $number)->get();
    // }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function greaterThan($number){
        return $this->where('id', '>', $number)->get();
    }
}
