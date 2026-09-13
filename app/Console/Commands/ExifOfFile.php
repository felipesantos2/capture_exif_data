<?php

namespace App\Console\Commands;

use App\Services\ExifService;
use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

#[Signature('app:exif')]
#[Description('Lista os meta dados dos arquivos')]
class GetExifOfFile extends Command
{
    public function __construct(
        private $service = new ExifService,
    ) {
        return parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * Precisamos dar um arquivo para um serviço analisar e ter algum retorno.
     * Metodos simples
     *
     * Atores básicos:
     * -> $file
     * -> Service
     * -> $values
     * == $values = Service($file)
     *
     *  ->file('ola.png')
     * ->exif()
     */
    public function handle()
    {

        $exifData = $this->service->file()
            ->exif();

        dd($exifData);
    }
}
