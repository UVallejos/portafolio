<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PDFController extends Controller
{
    
    function descargarCv(){
        $path = public_path("pdf/ulises_vallejos_cv.pdf");
        // Ruta al archivo PDF en el sistema de archivos

        return response()->download($path);


    }
}
