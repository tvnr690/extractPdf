<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\vendor\Autoload;
use Illuminate\PdfParser\Parser;

class Extract extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function index()
    {
        $parser = new Parser();
       
        $pdf    = $parser->parseFile('test.pdf');
        
        // Retrieve all details from the pdf file.
        // $details  = $pdf->getDetails();



        $text = $pdf->getText();
        $data = explode('\n', $text);
        echo "<pre>";
        print_r($data);
        echo "</pre>";
        exit;


        echo $text;
    } 

}
