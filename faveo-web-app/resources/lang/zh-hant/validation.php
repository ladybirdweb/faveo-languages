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

    'accepted'   => ':attribute 必須被接受。:attribute 必須被接受。 ', 
    'active_url' => ':attribute 不是一個有效的網址。',   
    'after'      => ':attribute 必須是一個遲於:date 的日期。',   
    'alpha'      => ':attribute 只能包含字母。',   
    'alpha_dash' => ':attribute 只能包含字母，數字，和破折號。 ', 
    'alpha_num'  => ':attribute 只能包含字母和數字。',   
    'array'      => ':attribute 必須是一個數組。 ', 
    'before'     => ':attribute 必須是一個早於:date 的日期。',  
    'between'    => [
        'numeric' => ':attribute 必須在:min 和:max之間。 ',    
        'file'    => ':attribute 必須在:min KB和:max KB之間。 ',  
        'string'  => ':attribute 必須在:min 位元組和:max 位元組之間。 ', 
        'array'   => ':attribute 必須有:min 到:max 個物品。',  
    ],
    'boolean'        => ':attribute 區域必須是對或者錯。 ',  
    'confirmed'      => ':attribute 的確認不匹配。',   
    'date'           => ':attribute 不是一個有效的日期。 ', 
    'date_format'    => ':attribute 不匹配:format 格式。 ', 
    'different'      => ':attribute 和:other 必須是不同的。 ',  
    'digits'         => ' :attribute 必須是:digits 個數字。',  
    'digits_between' => ':attribute 必須是在:min 和:max 個數字之間。',   
    'email'          => ' :attribute 必須是一個有效的郵箱地址。',   
    'filled'         => ':attribute 區域必須填寫。',    
    'exists'         => '被選中的:attribute 是無效的。',    
    'image'          => ':attribute 必須是一張圖片。',   
    'in'             => '被選中的:attribute 是無效的。 ', 
    'integer'        => ':attribute 必須是一個整數。 ',  
    'ip'             => ':attribute 必須是一個有效的網路地址。 ',  
    'max'            => [
        'numeric' => ':attribute 不能超過:max 。 ',  
        'file'    => ':attribute 不能超過:max KB。 ',   
        'string'  => ':attribute 不能超過:max 位元組。 ', 
        'array'   => '  :attribute 不能擁有超過:max 個物品。 ', 
    ],
    'mimes' => ':attribute 必須是:values 格式的檔。 ',  
    'min'   => [
        'numeric' => ':attribute 必須不低於:min 。',   
        'file'    => ' :attribute 必須不低於:min KB。  ',   
        'string'  => ':attribute 必須不低於:min 位元組。 ',  
        'array'   => ':attribute 必須有不少於:min 個物品。 ', 
    ],
    'not_in'               => '被選中的:attribute 是無效的。 ',  
    'numeric'              => ':attribute 必須是一個數字。 ',  
    'regex'                => ':attribute 格式是無效的。',  
    'required'             => ':attribute 區域必須填寫。 ',  
    'required_if'          => '當:other 是:value 時，:attribute 區域必須填寫。 ',  
    'required_with'        => '當:values 出現時，:attribute 區域必須填寫。 ',  
    'required_with_all'    => '當:values 出現時，:attribute 區域必須填寫。 ',  
    'required_without'     => '當:values 不出現時，:attribute 區域必須填寫。 ',  
    'required_without_all' => '當沒有一個:values 出現時，:attribute 區域必須填寫。 ',   
    'same'                 => ':attribute 和:other 必須匹配。 ',   
    'size'                 => [
        'numeric' => ':attribute 必須是:size 。 ',  
        'file'    => ':attribute 必須是:size KB。 ',  
        'string'  => ':attribute 必須是:size 位元組。 ',  
        'array'   => ':attribute 必須包含:size 個物品。 ',  
    ],
    'unique'   => ':attribute 已經被採用。 ',  
    'url'      => ' :attribute 格式是無效的。 ',  
    'timezone' => ' :attribute 必須是一個有效的區域。 ',  
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
            'rule-name' => '定制資訊',   
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
