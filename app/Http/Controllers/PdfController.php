<?php

namespace App\Http\Controllers;

use App\Image;
use App\Services\Pdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    protected $pdf;

    public function __construct(Pdf $pdf)
    {
        $this->pdf = $pdf;
    }

    public function __invoke(Image $image)
    {
        return response($this->pdf->generate($image), 200)
                        ->withHeaders([
                            'Content-Type' => 'application/pdf',
                            'Content-Disposition' => "{$this->pdf->action()}; filename=image-{$image->id}.pdf",
                        ]);
    }
}
