<?php

namespace App\Http\Requests\Api;

use Illuminate\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class RequestBase extends FormRequest
{
    // TODO : sessionチェックとvalidation
    
    public function __construct(Request $request)
    {
        $content = $request->getContent();
        $data = json_decode($content, true);

        // sessionチェックは一旦、行わない

        // if (!isset($data['cuid'])) {
        //     throw new \Exception('cuid not found.');
        // }

        // if ($data['cuid'] != $cuid) {
        //     throw new \Exception('cuid session check error.');
        // }
    }

    // /**
    //  * Determine if the user is authorized to make this request.
    //  *
    //  * @return bool
    //  */
    // public function authorize()
    // {
    //     return false;
    // }

    // /**
    //  * Get the validation rules that apply to the request.
    //  *
    //  * @return array
    //  */
    // public function rules()
    // {
    //     return [
    //         //
    //     ];
    // }
}
