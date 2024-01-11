<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $with = ['category', 'author'];
    public function scopeFilter($query, array $filters)
    {
        $query->when(
            $filters['search'] ?? false,
            fn($query, $search) =>
            $query->where(
                fn($query) =>
                $query->where('title', 'like', '%' . $search . '%')
                    ->orwhere('body', 'like', '%' . $search . '%')
            )
        );

        $query->when($filters['category'] ?? false, fn($query, $category) =>
            $query->whereHas('category', fn($query) =>
                $query->where('slug', $category)));

        $query->when($filters['author'] ?? false, fn($query, $author) =>
            $query->whereHas('author', fn($query) =>
                $query->where('username', $author)));
        // ->whereExist(fn($query) =>
        //     $query->from('categories')
        //         ->whereColumn('categories.id', 'posts.category_id')
        //         ->where('categories.slug', $category))
        // );
        // if ($filters['search'] ?? false) {
        //     $query
        //         ->where('title', 'like', '%' . request('search') . '%')
        //         ->orwhere('body', 'like', '%' . request('search') . '%');
        // }
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
