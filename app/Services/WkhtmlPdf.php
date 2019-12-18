<?php

namespace App\Services;

use App\Image;
use Knp\Snappy\Pdf as Snappy;
use Illuminate\Support\Facades\View;

class WkhtmlPdf extends Snappy
{
    public function __construct($config=[])
    {
        parent::__construct($config['binary'], $config['generator']);
    }

    public function render(Image $image)
    {
        return $this->getOutputFromHtml(
            View::make('pdf.image.template', compact('image'))->render()
        );
    }
}