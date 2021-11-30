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

    'accepted'   => 'يجب قبول السمة:.', //The :attribute must be accepted.',
    'active_url' => 'السمة: ليست عنوان ورل صالحا.', //The :attribute is not a valid URL.',
    'after'      => 'يجب أن تكون السمة هي تاريخ بعد: ديت.', //The :attribute must be a date after :date.',
    'alpha'      => 'قد تحتوي السمة على أحرف فقط.', //The :attribute may only contain letters.',
    'alpha_dash' => 'قد تحتوي السمة على أحرف وأرقام وشرطات فقط.', //The :attribute may only contain letters, numbers, and dashes.',
    'alpha_num'  => 'قد تحتوي السمة على أحرف وأرقام فقط.', //The :attribute may only contain letters and numbers.',
    'array'      => 'يجب أن تكون السمة مصفوفة.', //The :attribute must be an array.',
    'before'     => 'يجب أن تكون السمة: تاريخا قبل: ديت.', //The :attribute must be a date before :date.',
    'between'    => [
        'numeric' => 'يجب أن تكون السمة: مين و: ماكس.', //The :attribute must be between :min and :max.',
        'file'    => 'يجب أن تكون السمة: مين و: ماكس كيلوبايت.', //The :attribute must be between :min and :max kilobytes.',
        'string'  => 'يجب أن تكون السمة: مين و: ماكس من الأحرف.', //The :attribute must be between :min and :max characters.',
        'array'   => 'يجب أن تحتوي السمة على ما بين: مين و: ماكس من العناصر.', //The :attribute must have between :min and :max items.',
    ],
    'boolean'        => 'يجب أن يكون حقل السمة صحيحا أو خاطئا.', //The :attribute field must be true or false.',
    'confirmed'      => 'لا يتطابق تأكيد السمة.', //The :attribute confirmation does not match.',
    'date'           => 'السمة: ليست تاريخا صالحا.', //The :attribute is not a valid date.',
    'date_format'    => 'لا تتطابق السمة: مع التنسيق.', //The :attribute does not match the format :format.',
    'different'      => 'السمة: و أخرى يجب أن تكون مختلفة.', //The :attribute and :other must be different.',
    'digits'         => 'يجب أن تكون السمة: أرقام الأرقام.', //The :attribute must be :digits digits.',
    'digits_between' => 'يجب أن تكون السمة: مين و: ماكس ديجيتس.', //The :attribute must be between :min and :max digits.',
    'email'          => 'يجب أن تكون السمة عنوان بريد إلكتروني صالحا.', //The :attribute must be a valid email address.',
    'filled'         => 'حقل السمة: مطلوب.', //The :attribute field is required.',
    'exists'         => 'السمة المحددة: غير صالحة.', //The selected :attribute is invalid.',
    'image'          => 'يجب أن تكون السمة صورة.', //The :attribute must be an image.',
    'in'             => 'السمة المحددة: غير صالحة.', //The selected :attribute is invalid.',
    'integer'        => 'يجب أن تكون السمة عدد صحيح.', //The :attribute must be an integer.',
    'ip'             => 'يجب أن تكون الخاصية المميزة عنوان إب صالحا.', //The :attribute must be a valid IP address.',
    'max'            => [
        'numeric' => 'قد لا تكون السمة: أكبر من: ماكس.', //The :attribute may not be greater than :max.',
        'file'    => 'قد لا تكون السمة: أكبر من كيلوبايت كحد أقصى.', //The :attribute may not be greater than :max kilobytes.',
        'string'  => 'قد لا تكون السمة: أكبر من: الحد الأقصى للأحرف.', //The :attribute may not be greater than :max characters.',
        'array'   => 'قد لا تحتوي السمة على أكثر من: الحد الأقصى للعناصر.', //The :attribute may not have more than :max items.',
    ],
    'mimes' => 'يجب أن تكون الخاصية المميزة ملف من النوع:: القيم.', //The :attribute must be a file of type: :values.',
    'min'   => [
        'numeric' => 'يجب أن تكون السمة: مين على الأقل: مين.', //The :attribute must be at least :min.',
        'file'    => 'يجب أن تكون السمة: على الأقل كيلوبايت.', //The :attribute must be at least :min kilobytes.',
        'string'  => 'يجب أن تكون السمة: مين على الأقل.', //The :attribute must be at least :min characters.',
        'array'   => 'يجب أن تحتوي السمة على: مين من العناصر على الأقل.', //The :attribute must have at least :min items.',
    ],
    'not_in'               => 'السمة المحددة: غير صالحة.', //The selected :attribute is invalid.',
    'numeric'              => 'يجب أن تكون السمة رقم.', //The :attribute must be a number.',
    'regex'                => 'تنسيق السمة: غير صالح.', //The :attribute format is invalid.',
    'required'             => 'حقل السمة: مطلوب.', //The :attribute field is required.',
    'required_if'          => 'هو: مطلوب حقل السمة عندما: الآخر هو: القيمة.', //The :attribute field is required when :other is :value.',
    'required_with'        => 'حقل السمة: مطلوب عند: القيم موجودة.', //The :attribute field is required when :values is present.',
    'required_with_all'    => 'حقل السمة: مطلوب عند: القيم موجودة.', //The :attribute field is required when :values is present.',
    'required_without'     => 'حقل السمة: مطلوب عند: القيم غير موجودة.', //The :attribute field is required when :values is not present.',
    'required_without_all' => 'حقل السمة: مطلوب عند عدم وجود: القيم موجودة.', //The :attribute field is required when none of :values are present.',
    'same'                 => 'السمة: و يجب أن تتطابق الأخرى.', //The :attribute and :other must match.',
    'size'                 => [
        'numeric' => 'يجب أن تكون السمة: سيز.', //The :attribute must be :size.',
        'file'    => 'The :attribute must be :size kilobytes.', //The :attribute must be :size kilobytes.',
        'string'  => 'يجب أن تكون السمة: أحرف الحجم.', //The :attribute must be :size characters.',
        'array'   => 'يجب أن تحتوي السمة على: حجم العناصر.', //The :attribute must contain :size items.',
    ],
    'unique'   => 'تم أخذ السمة: بالفعل.', //The :attribute has already been taken.',
    'url'      => 'تنسيق السمة: غير صالح.', //The :attribute format is invalid.',
    'timezone' => 'يجب أن تكون السمة منطقة صالحة.', //The :attribute must be a valid zone.',
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
          'rule-name' => 'رسالة مخصصة', //custom-message',
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
