<?php
use Illuminate\Support\Facades\Storage;


function uploadImage($file, $dir)
{
    return Storage::put($dir, $file);
}