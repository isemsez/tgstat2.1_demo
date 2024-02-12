<?php

namespace App\Interfaces;


interface ApiErrorInterface
{
    public function help_msg(): string;

    public function error(): void;
}