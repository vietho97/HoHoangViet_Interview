<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $required = request()->isMethod('post') ? 'required|' : '';
        return [
            'username' => $required . 'string|max:100|unique:users,username,'.$this->user()->id,
            'hobbies' => 'string|max:100',
            'email' => 'string|email|max:100|unique:users,email,'.$this->user()->id,
            'password' => $required . 'string|min:6',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            "status_code" => Response::HTTP_UNPROCESSABLE_ENTITY,
            'error'      => $validator->errors()
        ], Response::HTTP_UNPROCESSABLE_ENTITY));
    }

    public function getAttributes()
    {
        $input = $this->safe()->only(['username', 'hobbies', 'email','password']);
        if (isset($input['password'])) {
            $input['password'] = Hash::make($this->get('password'));
        }
        return $input;
    }
}
