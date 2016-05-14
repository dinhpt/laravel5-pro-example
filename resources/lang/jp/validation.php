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
'province.occupation.number'=>'業務コードは数字です。',

//setting
'setting.code.number'=>'設定コードは数字です。',

//company
'accepted'             => ':attributeは入力必要です。',
'active_url'           => ':attributeは不正です。',
'after'                => ':attributeは:dateの以降ではありません。',
'alpha'                => ':attributeはローマ字のみです。',
'alpha_dash'           => ':attributeはアルファベルト文字のみです。',
'alpha_num'            => 'attributeはアルファベルト文字のみです。',
'array'                => 'attributeはArrayのみです。',
'before'               => 'attributeはは不正です。:attributeは:date以前必要です。',
'between'              => [
'array'   => ':attributeは不正です。:minと:maxの間を入力してください。',
'file'    => 'attributeは不正です。:minと:maxの間を入力してください。。',
'numeric' => ':attributeは不正です。:minと:maxの間を入力してください。',
'string'  => ':attributeは不正です。:minと:maxの間を入力してください。'
    ],
    'boolean'              => 'attributeは不正です。「True」又は「False」のみ選択してください。',
    'confirmed'            => 'attributeは不正です。',
    'date'                 => 'attributeは不正です。',
    'date_format'          => 'attributeは不正です。',
    'different'            => 'attributeは不正です。',
    'digits'               => 'attributeは不正です。:digits桁数を入力してください。',
    'digits_between'       => 'attributeは不正です。:minと:maxの間を入力してください。',
    'email'                => 'attributeは不正です。メールアドレスを入力してください。',
    'filled'               => 'attributeは不正です。',
    'exists'               => 'attributeは不正です。',
    'image'                => 'attributeは不正です。',
    'in'                   => 'attributeは不正です。',
    'integer'              => 'attributeは不正です。ナンバーを入力してください。',
    'ip'                   => 'attributeは不正です。ＩＰアドレスを入力してください。',
    'max'                  => [
    'array'   => 'attributeは不正です。:max制限で入力してください。',
    'file'    => 'attributeは不正です。:maxkilobytes制限で入力してください。',
    'numeric' => 'attributeは不正です。:max制限で入力してください。',
    'string'  => 'attributeは不正です。:max制限で入力してください。'
        ],
        'mimes'                => ':attributeは:valuesタイプです。',
        'min'                  => [
        'array'   => ':attributeは最低:min項目です。',
        'file'    => ':attributeは最低:min kilobytesです。',
        'numeric' => ':attributeは最低:minです。',
        'string'  => ':attributeは最低:min文字数です。'
            ],
            'not_in'               => 'attributeは不正です。',
            'numeric'              => ':attributeをナンバーで入力してください。',
            'regex'                => ':attributeは不正です。',
            'required'             => ':attributeは入力必要です。',
            'required_if'          => ':attributeは不正です。',
            'required_with'        => 'attributeは不正です。',
            'required_with_all'    => 'attributeは不正です。',
            'required_without'     => 'attributeは不正です。',
            'required_without_all' => 'attributeは不正です。',
            'same'                 => ':attributeは不正です。:otherと同じを',
            'size'                 => [
            'array'   => ':attributeは不正です。:size itemsを含む値を入力してください。',
            'file'    => ':attributeは不正です。:sizeを入力してください。',
            'numeric' => ':attributeは不正です。:sizeを入力してください。',
            'string'  => ':attributeは不正です。:sizeを入力してください。'
                ],
                'string'               => ':attributeは文字例を入力してください。',
                'timezone'             => ':attributeは不正です。時間を入力してください。',
                'unique'               => ':attributeはすでに存在しています。',
                'url'                  => ':attributeは不正です。ＵＲＬを入力してください。',

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
