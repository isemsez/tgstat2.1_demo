<?php

namespace App\Exceptions;

use Illuminate\Contracts\Support\Arrayable;

class ApiError implements Arrayable
{

    /**
     * @param string $error_msg
     * @param string $help_msg
     */
    public function __construct(
        private string $error_msg,
        private string $help_msg
    ){ }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'error' => $this->error_msg,
            'help'  => $this->help_msg,
        ];
    }
}