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

echo '<ul>';
foreach ($data as $noticia) {
    $autor = new Autor($noticia->autor);
    $noticia = new Noticia($autor, $noticia->titulo, $noticia->corpo);
    echo '<li><a href="view.php?url=' . $noticia->url . '">' . $noticia->titulo .  '</a></li>';
}
echo '</ul>';