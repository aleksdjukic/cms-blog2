<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;
use test\Mockery\MockingParameterAndReturnTypesTest;

class EditPostRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
//        $post = Post::find($this->route('admin/posts'));
//        return $post && $this->user()->can('update', $post);
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
            'title' => 'required',
            'photo_id' => 'required',
            'body' => 'required'
        ];
    }
}
