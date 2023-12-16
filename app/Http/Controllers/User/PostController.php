<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        return 'Страница списка постов';
    }

    public function create()
    {
        return 'Страница создания поста';
    }

    public function store()
    {
        return 'Создание поста (добавление в БД)';
    }

    public function show($post)
    {
        return "Страница просмотра поста {$post}";
    }

    public function edit($post)
    {
        return "Страница редактирования поста {$post}";
    }

    public function update()
    {
        return 'Обновление поста (в БД)';
    }

    public function delete()
    {
        return 'Удаление поста (из БД)';
    }

    public function like()
    {
        return 'Лайк + 1';
    }
}
