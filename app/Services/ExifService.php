<?php

namespace App\Services;

use Illuminate\Support\Facades\File;

class ExifService
{
    private ?array $data = [];

    const array ALLOW_EXT = [
        'PNG',
        'png',
        'JPG',
        'jpg',
    ];

    public function file(?string $file = null): static
    {
        $filePath = public_path($file ?? 'images/IMG_20250506_080517.jpg');

        if ($exists = File::exists($filePath)) {
            $this->data['exists'] = $exists;
            $this->data['full_path'] = $filePath;
            $this->data['file_name'] = File::name($filePath);
            $this->data['file_extension'] = File::extension($filePath);
            $this->data['dir'] = File::dirname($filePath);
            $this->data['exif'] = [
                'created_at' => '12',
                'updated_at' => '12',
                'file_type'  => '12',
            ];
        }

        return $this;
    }

    public function exif(): mixed
    {
        return $this->data;
    }
}
