<?php

namespace App\Models;

use App\Model;

class Article extends Model
{
    protected const TABLE = 'articles';

    public string $title;
    public string $content;
    public string $author;
    public $addTime;
}