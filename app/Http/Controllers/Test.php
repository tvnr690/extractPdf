<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Spatie\PdfToText\Pdf;

class Test extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function index()
    {
        $path = 'c:/Program Files/Git/mingw64/bin/pdftotext';
        echo Pdf::getText('cosmic.pdf', $path);
        exit;
    }
} 
?>