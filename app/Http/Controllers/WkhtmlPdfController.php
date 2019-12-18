<?php

namespace App\Http\Controllers;

use App\Image;
use App\Services\WkhtmlPdf;
use Illuminate\Http\Request;

class WkhtmlPdfController extends Controller
{
    protected $pdf;

    public function __construct(WkhtmlPdf $pdf)
    {
        $this->pdf = $pdf;
    }

    public function __invoke(Image $image)
    {
        return response($this->pdf->render($image), 200)
                    ->withHeaders([
                        'Content-type' => 'application/pdf',
                        'Content-Disposition' => (request()->has('download') ? 'attachment' : 'inline') . "; filename=image-{$image->id}.pdf;",
                    ]);
    }
}
