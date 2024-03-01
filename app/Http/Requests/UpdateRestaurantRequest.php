<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\File;

class UpdateRestaurantRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:2|max:50',
            'address' => 'required|min:5|max:50',
            'description' => 'required|min:5|max:100',
            'vat' => 'required',
            "picture" => ["nullable", File::image()->min("1kb")->max("2mb")],
            'user_id' => 'exists:users,id',
            'types' => 'exists:types,id'

        ];
    }
}
