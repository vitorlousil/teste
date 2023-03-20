<?php

namespace Vlassessoria\Teste;

final class Conexao
{
    private array $data = [];
    public function __construct()
    {
        $this->data = [
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
    }
    public function lerNoticiasDoBanco(): array
    {
        return $this->data;
    }
}
