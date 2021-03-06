<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = 'articles';
    public $timestamps = false;
    public function tags()
  {
    return $this->belongsToMany(Tag::class, 'article_tag', 'article_id', 'tag_id');
  }
}

