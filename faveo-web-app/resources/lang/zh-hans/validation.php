<?php

return [

    /*
      |--------------------------------------------------------------------------
      | Validation Language Lines
      |--------------------------------------------------------------------------
      |
      | The following language lines contain the default error messages used by
      | the validator class. Some of these rules have multiple versions such
      | as the size rules. Feel free to tweak each of these messages here.
      |
     */

    'accepted'   => ':attribute 必须被接受。:attribute 必须被接受。 ', 
    'active_url' => ':attribute 不是一个有效的网址。',   
    'after'      => ':attribute 必须是一个迟于:date 的日期。',   
    'alpha'      => ':attribute 只能包含字母。',   
    'alpha_dash' => ':attribute 只能包含字母，数字，和破折号。 ', 
    'alpha_num'  => ':attribute 只能包含字母和数字。',   
    'array'      => ':attribute 必须是一个数组。 ', 
    'before'     => ':attribute 必须是一个早于:date 的日期。',  
    'between'    => [
        'numeric' => ':attribute 必须在:min 和:max之间。 ',    
        'file'    => ':attribute 必须在:min KB和:max KB之间。 ',  
        'string'  => ':attribute 必须在:min 字节和:max 字节之间。 ', 
        'array'   => ':attribute 必须有:min 到:max 个物品。',  
    ],
    'boolean'        => ':attribute 区域必须是对或者错。 ',  
    'confirmed'      => ':attribute 的确认不匹配。',   
    'date'           => ':attribute 不是一个有效的日期。 ', 
    'date_format'    => ':attribute 不匹配:format 格式。 ', 
    'different'      => ':attribute 和:other 必须是不同的。 ',  
    'digits'         => ' :attribute 必须是:digits 个数字。',  
    'digits_between' => ':attribute 必须是在:min 和:max 个数字之间。',   
    'email'          => ' :attribute 必须是一个有效的邮箱地址。',   
    'filled'         => ':attribute 区域必须填写。',    
    'exists'         => '被选中的:attribute 是无效的。',    
    'image'          => ':attribute 必须是一张图片。',   
    'in'             => '被选中的:attribute 是无效的。 ', 
    'integer'        => ':attribute 必须是一个整数。 ',  
    'ip'             => ':attribute 必须是一个有效的网络地址。 ',  
    'max'            => [
        'numeric' => ':attribute 不能超过:max 。 ',  
        'file'    => ':attribute 不能超过:max KB。 ',   
        'string'  => ':attribute 不能超过:max 字节。 ', 
        'array'   => '  :attribute 不能拥有超过:max 个物品。 ', 
    ],
    'mimes' => ':attribute 必须是:values 格式的档。 ',  
    'min'   => [
        'numeric' => ':attribute 必须不低于:min 。',   
        'file'    => ' :attribute 必须不低于:min KB。  ',   
        'string'  => ':attribute 必须不低于:min 字节。 ',  
        'array'   => ':attribute 必须有不少于:min 个物品。 ', 
    ],
    'not_in'               => '被选中的:attribute 是无效的。 ',  
    'numeric'              => ':attribute 必须是一个数字。 ',  
    'regex'                => ':attribute 格式是无效的。',  
    'required'             => ':attribute 区域必须填写。 ',  
    'required_if'          => '当:other 是:value 时，:attribute 区域必须填写。 ',  
    'required_with'        => '当:values 出现时，:attribute 区域必须填写。 ',  
    'required_with_all'    => '当:values 出现时，:attribute 区域必须填写。 ',  
    'required_without'     => '当:values 不出现时，:attribute 区域必须填写。 ',  
    'required_without_all' => '当没有一个:values 出现时，:attribute 区域必须填写。 ',   
    'same'                 => ':attribute 和:other 必须匹配。 ',   
    'size'                 => [
        'numeric' => ':attribute 必须是:size 。 ',  
        'file'    => ':attribute 必须是:size KB。 ',  
        'string'  => ':attribute 必须是:size 字节。 ',  
        'array'   => ':attribute 必须包含:size 个物品。 ',  
    ],
    'unique'   => ':attribute 已经被采用。 ',  
    'url'      => ' :attribute 格式是无效的。 ',  
    'timezone' => ' :attribute 必须是一个有效的区域。 ',  
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
            'rule-name' => '定制信息',   
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
