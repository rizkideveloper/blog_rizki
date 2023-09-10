<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //yang boleh diisi, selain itu tidak boleh
    //protected $fillable=['title','excerpt','body'];

    //tidak boleh diisi, selain itu boleh
    protected $guarded = ['id'];

    protected $with = ['author','category'];

    //nama method nya harus sama dengan nama modelnya
    public function category()
    {
        //relasi dari tabel POst ke table Category
        return $this->belongsTo(Category::class);
    }

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id'); //author alias 'user_id'
    }
}
