<?php
require __DIR__ . '/autoload.php';

use App\Models\Article;

$articles = Article::findLastCount(3);

include __DIR__ . '/App/templates/articles.php';