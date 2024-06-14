<?php

namespace App\Http\Controllers;

use App\Services\FileUploadService;
use Illuminate\Http\Request;
use Pion\Laravel\ChunkUpload\Handler\HandlerFactory;
use Pion\Laravel\ChunkUpload\Receiver\FileReceiver;

class UploadController extends Controller
{
    public function upload(Request $request, FileUploadService $fileUploadService)
    {
        $receiver = new FileReceiver("file", $request, HandlerFactory::classFromRequest($request));

        return $fileUploadService->uploadFile($receiver);
    }

}
