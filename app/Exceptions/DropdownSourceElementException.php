<?php

namespace App\Exceptions;

use App\Interfaces\ApiErrorInterface;
use Exception;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class DropdownSourceElementException extends Exception implements ApiErrorInterface
{
    private ApiError $error;

    public int $status = Response::HTTP_NOT_FOUND;


    public function __construct(private string $error_msg)
    {
        parent::__construct();

        $this->error();
    }


    /**
     * A message for user.
     *
     * @return string
     */
    public function help_msg(): string
    {
        return 'There is some error in page request. Try again later. Site admin is notified.';
    }


    /**
     *  Data for trouble-shooting.
     *
     * @return void
     */
    public function error(): void
    {
        $this->error = new ApiError( $this->error_msg, $this->help_msg() );
    }


    public function render(): JsonResponse
    {
        return response()->json($this->error, $this->status);
    }
}
