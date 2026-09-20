<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
    $proyectos = [
        [
            'titulo' => 'belocomputacion',
            'descripcion' => 'Sitio web de venta de computadoras',
            'url' => 'https://github.com/lucasbell275/belocomputacion#',
            'images' => [
            ['src' => 'images\proyectos\belocomputacion\belocomputacion-contacto.png', 'alt' => 'pagina contacto belocomputacion'],
            ['src' => 'images\proyectos\belocomputacion\belocomputacion-home.png', 'alt' => 'landing page belocomputacion'],
            ['src' => 'images\proyectos\belocomputacion\belocomputacion-index-computadoras.png', 'alt' => 'indice computadoras belocomputacion'],
            ['src' => 'images\proyectos\belocomputacion\belocomputacion-index-marcas.png', 'alt' => 'indice marcas belocomputacion'],
            ['src' => 'images\proyectos\belocomputacion\belocomputacion-nosotros.png', 'alt' => 'pagina nosotros belocomputacion'],
            ['src' => 'images\proyectos\belocomputacion\belocomputacion-show.png', 'alt' => 'pagina de computadora'],
        ],
        
        ]
        // Aca agregando otros corchetes puedo sumar otro proyecto
        
    ];
    
        return view('home', compact('proyectos'));
    }

}
