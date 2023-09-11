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
    protected $with = ['author', 'category'];

    // penamaan func harus diawali dengan scope
    public function scopeFilter($query, array $filters)
    {

        // if (isset($filters['keyword']) ? $filters['keyword'] : false) {
        //     $search = $filters['keyword'];

        //     return $query->where('title', 'like', '%' . $search . '%')
        //         ->orWhere('body', 'like', '%' . $search . '%');
        // }

        //when collection search
        $query->when($filters['keyword'] ?? false, function ($query, $keyword) {
            return $query->where('title', 'like', '%' . $keyword . '%')
                ->orWhere('body', 'like', '%' . $keyword . '%');
        });

        //when collection search with category
        $query->when($filters['category'] ?? false, function ($query, $category) {
            // use bertujuan agar $category yang diluar bisa diambil ke func didalam
            return $query->whereHas('category', function($query) use ($category) {
                $query->where('slug',$category);
            });
        });
    }

    //nama method nya harus sama dengan nama modelnya
    public function category()
    {
        //relasi dari tabel POst ke table Category
        //yang dititipkan (belongsTo)
        return $this->belongsTo(Category::class);
    }

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

    public function author()
    {
        //yang dititipkan (belongsTo)
        return $this->belongsTo(User::class, 'user_id'); //author alias 'user_id'
    }
}
