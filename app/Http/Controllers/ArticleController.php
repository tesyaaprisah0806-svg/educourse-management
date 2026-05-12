<?php

namespace App\Http\Controllers;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = [
            ['title' => 'Eksplorasi Laravel 10', 'slug' => 'eksplorasi-laravel-10', 'desc' => 'Mengenal fitur terbaru di framework Laravel 10.'],
            ['title' => 'Mastering Bootstrap 5', 'slug' => 'mastering-bootstrap-5', 'desc' => 'Cara membuat website responsif dengan cepat.'],
        ];
        return view('articles.index', compact('articles'));
    }

    public function show($slug)
    {
        $article = [
            'title' => str_replace('-', ' ', ucwords($slug, '-')),
            'content' => 'Ini adalah detail konten artikel untuk ' . $slug . '. Materi ini sangat penting bagi mahasiswa Manajemen Informatika dalam memahami ekosistem pengembangan web modern.',
            'date' => date('d F Y')
        ];
        return view('articles.show', compact('article'));
    }
}