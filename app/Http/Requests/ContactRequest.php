<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
        return [
            'name' => 'required',
            'email' => 'required|max:50',
            'title' => 'required|max:20',
            'contact' => 'required|max:255'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'お名前は必須です。',
            'email.required' => 'メールアドレスは必須です。',
            'email.max' => '最大50文字までです。',
            'title.required' => 'タイトルは必須です。',
            'title.max' => '最大20文字です。',
            'contact.required' => 'お問い合わせ内容は必須です。',
            'contact.max' => '最大255文字です。'
        ];
    }
}
