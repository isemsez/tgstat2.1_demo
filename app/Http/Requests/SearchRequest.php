<?php

namespace App\Http\Requests;

use App\Services\Data;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SearchRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'sourceElement' => 'required|in:searchQuery',
            'q' => 'required|string|max:191',  # search string
            'inAbout' => 'bool',
            'categories.*' => ['required', 'string', 'distinct', Rule::in(
                array_keys(Data::associative_categories())
            )],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }

}
