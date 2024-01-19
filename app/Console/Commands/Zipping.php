<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use ZipArchive;

class Zipping extends Command
{
    protected $signature = 'zip';

    protected $description = '...';

    public function handle(): void
    {
        $zipFile = storage_path("repository/mcap.zip");
        $zipArchive = new ZipArchive();

        if ($zipArchive->open($zipFile, (ZipArchive::CREATE | ZipArchive::OVERWRITE)) !== true)
            die("Failed to create archive\n");

        $zipArchive->addGlob((storage_path("repository/coinmarketcap/*.html")), options: ['remove_all_path'=>true]);
        if ($zipArchive->status != ZIPARCHIVE::ER_OK)
            echo "Failed to write files to zip\n";

        $zipArchive->close();
        $this->info('mcap done');
//
//        $zipFile = storage_path("repository/cry.zip");
//        $zipArchive = new ZipArchive();
//
//        if ($zipArchive->open($zipFile, (ZipArchive::CREATE | ZipArchive::OVERWRITE)) !== true)
//            die("Failed to create archive\n");
//
//        $zipArchive->addGlob((storage_path("repository/cryptorank/*.html")));
//        if ($zipArchive->status != ZIPARCHIVE::ER_OK)
//            echo "Failed to write files to zip\n";
//
//        $zipArchive->close();
//        $this->info('cry done');
    }

}

