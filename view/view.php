<?php

use Exemplo\Autor;
use Exemplo\Noticia;

require_once __DIR__ . '/../vendor/autoload.php';

$data = [
    (object)[
        'titulo' => 'Exemplo 01',
        'autor' => 'Fulano',
        'corpo' => 'Foo'
    ],
    (object)[
        'titulo' => 'Exemplo 02',
        'autor' => 'Beltrano',
        'corpo' => 'Bar'
    ],
    (object)[
        'titulo' => 'Exemplo 03',
        'autor' => 'Cicrano',
        'corpo' => 'Baz'
    ]
];

$url = $_GET['url'];

foreach ($data as $noticia) {
    $autor = new Autor($noticia->autor);
    $noticia = new Noticia($autor, $noticia->titulo, $noticia->corpo);
    if($noticia->url === $url) {
        echo $autor->getNome();
        echo $noticia->titulo;
        echo $noticia->corpo;
        exit;
    }
}