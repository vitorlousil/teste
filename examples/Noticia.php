<?php
namespace Exemplo;

final class Noticia {
    private Autor $autor;
    public string $titulo;
    public string $corpo;
    public string $url;
    public function __construct(Autor $autor, string $titulo, string $corpo) {
        $this->autor = $autor;
        $this->titulo = $titulo;
        $this->corpo = $corpo;
        $this->url = $this->urlfy($titulo);
    }    

    public function urlfy(string $texto) : string {
        $string = strtolower($texto);
        $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
        $string = preg_replace("/[\s-]+/", " ", $string);
        $string = preg_replace("/[\s_]/", "-", $string);
        return $string;
    }
}