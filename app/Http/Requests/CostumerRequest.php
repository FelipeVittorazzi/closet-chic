<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use LaravelLegends\PtBrValidator\Rules\FormatoCpf;
use LaravelLegends\PtBrValidator\Rules\CelularComDdd;

class CostumerRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'cpf'  => ['required', new FormatoCpf],
            'phone'  => ['required', new CelularComDdd]
        ];
    }

    public function messages(): array
    {
        return [
            'cpf' => 'CPF inválido.',
            'phone' => 'Telefone inválido.',
        ];
    }
}
