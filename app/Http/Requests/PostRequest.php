<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'photo' => 'required|max:50',
            'title' => 'required|max:20',
            'description' => 'required|max:255',
            'postdetail0' => 'required|max:50',
            'postdetail1' => 'required|max:50',
            'postdetail2' => 'required|max:50',
        ];
    }
    public function messages()
    {
        return [
            'photo.required' => 'トップ画像は必須です。',
            'photo.max' => '最大50文字までです。',
            'title.required' => 'タイトルは必須です。',
            'title.max' => '最大20文字までです。',
            'description.required' => '説明は必須です。',
            'description.max' => '最大255文字です。',
            'postdetail0.required' => 'サブ画像1は必須です。',
            'postdetail0.max' => '最大50文字です。',
            'postdetail1.required' => 'サブ画像2は必須です。',
            'postdetail1.max' => '最大50文字です。',
            'postdetail2.required' => 'サブ画像3は必須です。',
            'postdetail2.max' => '最大50文字です。',
        ];
    }
}
