<?php

namespace App\Services;

use App\Image;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\View;

class Pdf extends Dompdf{
    public function __construct($config=[])
    {
        parent::__construct($config);
    }

    public function action(){
        return request()->has('download') ? 'attachment' : 'inline';
    }


    public function generate(Image $image){
        $this->loadHtml(
            View::make('pdf.image.template', compact('image'))->render()
        );

        $this->render();

        return $this->output();
    }
}