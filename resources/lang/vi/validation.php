<?php 
return [

/*
 |--------------------------------------------------------------------------
| English Validation Language Lines
|--------------------------------------------------------------------------
|
| The following language lines contain the default error messages used by
| the validator class. Some of these rules have multiple versions such
| as the size rules. Feel free to tweak each of these messages here.
|
*/

//position
'province.occupation.number'=>'Trường ngành nghề là trường số',

//setting
'setting.code.number'=>'Mã thiết lập là trường số',

//company
'accepted'             => 'Trường :attribute yêu cầu nhập.',
'active_url'           => 'Trườn :attribute không phải là địa chỉ URL.',
'after'                => 'Trường :attribute phải sau ngày :date.',
'alpha'                => 'Trường :attribute chỉ chứa các chữ cái.',
'alpha_dash'           => 'Trường :attribute chỉ chứa các chữ, số, và dấu -.',
'alpha_num'            => 'Trường :attribute chỉ chứa các ký tự và các số.',
'array'                => 'Trường :attribute phải là một mảng.',
'before'               => 'Trường :attribute là một ngày trước :date.',
'between'              => [
'array'   => 'Trường :attribute phải nằm giữa :min và :max giá trị.',
'file'    => 'Trường :attribute phải có giá trị trong khoảng :min và :max kilobytes.',
'numeric' => 'Trường :attribute phải có giá trị trong khoảng :min và :max.',
'string'  => 'Trường :attribute có số ký tự trong khoảng :min and :max ký tự.'
    ],
    'boolean'              => 'Trường :attribute chỉ có giá trị đúng hoặc sai.',
    'confirmed'            => 'Trường :attribute xác nhận không khớp.',
    'date'                 => 'Trường :attribute không phải là một ngày hợp lệ.',
    'date_format'          => 'Trường :attribute không phù hợp với định dạng :format.',
    'different'            => 'Trường :attribute và :other phải khác nhau.',
    'digits'               => 'Trường :attribute phải có :digits chữ số.',
    'digits_between'       => 'Trường :attribute có số chữ số nằm trong khoảng :min and :max chữ số.',
    'email'                => 'Trường :attribute không phải là địa chỉ email hợp lệ.',
    'filled'               => 'Trường :attribute lĩnh vực được yêu cầu.',
    'exists'               => 'Các lựa chọn :attribute không hợp lệ.',
    'image'                => 'Trường :attribute phải là 1 ảnh.',
    'in'                   => 'Các lựa chọn :attribute không hợp lệ.',
    'integer'              => 'Trường :attribute phải là số nguyên.',
    'ip'                   => 'Trường :attribute phải là 1 địa chỉ IP.',
    'max'                  => [
    'array'   => 'Trường :attribute không thể vượt quá :max phần tử.',
    'file'    => 'Trường :attribute không thể vượt quá :max kilobytes.',
    'numeric' => 'Trường :attribute không thể lớn hơn :max.',
    'string'  => 'Trường :attribute không được vượt quá :max ký tự.'
        ],
        'mimes'                => 'The :attribute must be a file of type: :values.',
        'min'                  => [
        'array'   => 'Trường :attribute phải có ít nhất :min phần tử.',
        'file'    => 'Trường :attribute phải nhỏ nhất :min kilobytes.',
        'numeric' => 'Trường :attribute must be at least :min.',
        'string'  => 'Trường :attribute phải có ít nhất :min ký tự.'
            ],
            'not_in'               => 'Lựa chọn :attribute không hợp lệ.',
            'numeric'              => 'Trường :attribute phải là một số.',
            'regex'                => 'Trường :attribute định dạng không hợp lệ.',
            'required'             => 'Trường :attribute yêu cầu nhập.',
            'required_if'          => 'Trường :attribute field is required when :other is :value.',
            'required_with'        => 'The :attribute field is required when :values is present.',
            'required_with_all'    => 'The :attribute field is required when :values is present.',
            'required_without'     => 'The :attribute field is required when :values is not present.',
            'required_without_all' => 'The :attribute field is required when none of :values are present.',
            'same'                 => 'Trường :attribute và :other phải giống nhau.',
            'size'                 => [
            'array'   => 'The :attribute must contain :size items.',
            'file'    => 'The :attribute must be :size kilobytes.',
            'numeric' => 'The :attribute must be :size.',
            'string'  => 'The :attribute must be :size characters.'
                ],
                'string'               => 'Trường :attribute phải là 1 chuỗi.',
                'timezone'             => 'The :attribute must be a valid zone.',
                'unique'               => 'Trường :attribute đã tồn tại trong hệ thống.',
                'url'                  => 'Trường :attribute định dạng không hợp lệ.',

                /*
                 |--------------------------------------------------------------------------
| Custom Validation Language Lines
|--------------------------------------------------------------------------
|
| Here you may specify custom validation messages for attributes using the
| convention "attribute.rule" to name the lines. This makes it quick to
| specify a specific custom language line for a given attribute rule.
|
*/

'custom' => [
'attribute-name' => [
'rule-name' => 'custom-message',
],
],

/*
 |--------------------------------------------------------------------------
| Custom Validation Attributes
|--------------------------------------------------------------------------
|
| The following language lines are used to swap attribute place-holders
| with something more reader friendly such as E-Mail Address instead
| of "email". This simply helps us make messages a little cleaner.
|
*/

'attributes' => [],

];
