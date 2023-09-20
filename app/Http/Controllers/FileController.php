<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function servePDF($filename)
    {
        $file = Storage::disk('custom')->get($filename);

        return response($file)
            ->header('Content-Type', 'application/pdf');
    }

    public function serveImage($filename)
    {
        $file = Storage::disk('custom')->get($filename);

        return response($file)
            ->header('Content-Type', 'image/jpeg');
    }
}
