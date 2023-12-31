<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

class AWSService
{
    public function publish(string $title, string $content, string $path = '')
    {
        Storage::disk('s3')->put("$path/$title", $content);
    }

    public function unpublish(string $title, string $path = '') {
        Storage::disk('s3')->delete("$path/$title");
    }
}