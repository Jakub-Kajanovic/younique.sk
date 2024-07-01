<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    use Sluggable;

    protected $fillable = ['title','slug','content','image','author','category_id','featured_text'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function getReadingTime()
    {
        $wordCount = str_word_count(strip_tags($this->content));
        $wordsPerMinute = 200; // Môžeš upraviť podľa potreby

        $readingTimeMinutes = ceil($wordCount / $wordsPerMinute);

        return $readingTimeMinutes;
    }
    
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
