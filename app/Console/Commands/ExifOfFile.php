<?php

namespace App\Console\Commands;

use App\Services\ExifService;
use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;

#[Signature('app:exif')]
#[Description('Lista os meta dados dos Arquivos')]
class GetExifOfFile extends Command
{
    public function __construct(
        protected $service = new ExifService,
    ) {}

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
