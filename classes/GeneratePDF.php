<?php
namespace Classes;

if (!defined('ACCESSCHECK')) {
    die('Direct access not permitted');
}


use mikehaertl\pdftk\Pdf;

class GeneratePDF
{
    public function generate($data)
    {
        try {
            $filename = 'fillform.pdf';
            $filename = 'pdf_' .date("Ymd").'_'. rand(2000, 1200000). '.pdf';


            $pdf = new Pdf('./form.pdf');
            $pdf->fillForm($data)
            ->needAppearances()
                        //->flatten()
            ->saveAs('./completed/' . $filename);

            return $filename;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
