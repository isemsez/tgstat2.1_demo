<?php

namespace App\Http\Requests;

use App\Services\Data;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Str;

class AddChannelRequest extends FormRequest
{
    public array $prepared_data = [];

    public function rules(): array
    {
        return [
            'username'      => ['required', 'string', 'min:4', 'max:191', "unique:App\Models\Peer,alias", function ($attribute, $value, $fail) {
                if (!Str::startsWith($value, ['@', 't.me/joinchat/', 't.me/+'])) {
                    $fail = 'Должно начинаться с "@" или "t.me/joinchat/" или "t.me/+"';
                }
            }],  # search string
            'country'       => ['nullable', Rule::in(array_keys(Data::associative('countries')))],
            'language'      => ['nullable', Rule::in(array_keys(Data::associative('languages')))],
            'category_id'   => ['nullable', Rule::in(array_keys(Data::associative('categories')))],
//            'submit-button' => 'bool',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }

    protected function passedValidation(): void
    {
        $validated = array_merge($this->validated(), [
            'alias' => $this->validated()['username'],
            'username' => null,
            'category' => $this->validated()['category_id'],
            'category_id' => null,
        ]);

        foreach ($validated as $key=>$value) {
            if ( !empty($value) ) {
                $prepared_data[$key] = $value;
            }
        }
        $this->prepared_data = $prepared_data;
    }

}
