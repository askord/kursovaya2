<?php
namespace App\Entities;
use Illuminate\Database\Eloquent\Model;
class Article extends Model
{
    protected $table = "articles";
    protected $primaryKey = "id";
    protected $fillable = [
        'title',
        'text',
        'price',
    ];
    
    /**Relations*/
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_articles', 'article_id',
            'category_id');
    }
    public function comments()
    {
        return $this->hasMany(Comment::class, 'article_id', 'id');
    }
}