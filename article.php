<?php
require __DIR__ . '/autoload.php';

use App\Models\Article;

$id = $_GET['id'];

if (empty($id) || !is_numeric($id)) {
    header('Location: /index.php');
    exit();
}

$article = Article::findById($id);

if (false === $article) {
    echo 'Страница не найдена!';
    exit();
}

include __DIR__ . '/App/templates/article.php';