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

    'accepted'   => 'The :attribute must be accepted.',
    'active_url' => 'The :attribute is not a valid URL.',
    'after'      => 'The :attribute must be a date after :date.',
    'alpha'      => 'The :attribute may only contain letters.',
    'alpha_dash' => 'The :attribute may only contain letters, numbers, and dashes.',
    'alpha_num'  => 'The :attribute may only contain letters and numbers.',
    'array'      => 'The :attribute must be an array.',
    'before'     => 'The :attribute must be a date before :date.',
    'between'    => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file'    => 'The :attribute must be between :min and :max kilobytes.',
        'string'  => 'The :attribute must be between :min and :max characters.',
        'array'   => 'The :attribute must have between :min and :max items.',
    ],
    'boolean'        => 'The :attribute field must be true or false.',
    'confirmed'      => 'The :attribute confirmation does not match.',
    'date'           => 'The :attribute is not a valid date.',
    'date_format'    => 'The :attribute does not match the format :format.',
    'different'      => 'The :attribute and :other must be different.',
    'digits'         => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'email'          => 'The :attribute must be a valid email address.',
    'filled'         => 'The :attribute field is required.',
    'exists'         => 'The selected :attribute is invalid.',
    'image'          => 'The :attribute must be an image.',
    'in'             => 'The selected :attribute is invalid.',
    'integer'        => 'The :attribute must be an integer.',
    'ip'             => 'The :attribute must be a valid IP address.',
    'max'            => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file'    => 'The :attribute may not be greater than :max kilobytes.',
        'string'  => 'The :attribute should be less than :max characters.',
        'array'   => 'The :attribute may not have more than :max items.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'min'   => [
        'numeric' => 'The :attribute must be at least :min.',
        'file'    => 'The :attribute must be at least :min kilobytes.',
        'string'  => 'The :attribute must be at least :min characters.',
        'array'   => 'The :attribute must have at least :min items.',
    ],
    'not_in'               => 'The selected :attribute is invalid.',
    'numeric'              => 'The :attribute must be a number.',
    'regex'                => 'The :attribute format is invalid.',
    'required'             => 'The :attribute field is required.',
    'required_if'          => 'The :attribute field is required when :other is :value.',
    'required_with'        => 'The :attribute field is required when :values is present.',
    'required_with_all'    => 'The :attribute field is required when :values is present.',
    'required_without'     => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same'                 => 'The :attribute and :other must match.',
    'size'                 => [
        'numeric' => 'The :attribute must be :size.',
        'file'    => 'The :attribute must be :size kilobytes.',
        'string'  => 'The :attribute must be :size characters.',
        'array'   => 'The :attribute must contain :size items.',
    ],
    'unique'   => 'The :attribute has already been taken.',
    'url'      => 'The :attribute format is invalid.',
    'timezone' => 'The :attribute must be a valid zone.',
    'uploaded' => 'File size is bigger than maximum allowed size for uploaded files on server. Try with less file size or contact system admin.',
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
        /** Example usage **/
        // 'attribute-name' => [
        //     'rule-name' => 'custom-message',
        // ],
        'events.*.old' => [
            'required_unless' => 'Please choose an old value',
            'required_if'     => 'Please choose an old value'
        ],
        'events.*.new' => [
            'required_unless' => 'Please choose a new value',
            'required_if'     => 'Please choose a new value'
        ],
        'listeners.name' => [
            'required' => 'Please enter a name for listener',
        ],
        'listeners.name' => [
            'unique' => 'Listener with this name already exists'
        ],
        'events.*.event' => [
            'required' => 'Please choose event(s) to trigger this listener'
        ],
        'events.*.condition' => [
            'required' => 'Please choose conditions for all events',
            'required_unless' => 'Please choose conditions for the events'
        ],
        'rules.*.condition' => [
            'required_with'=>'Please choose conditions for all rules'
        ],
        'rules.*.value' => [
            'required_with' => 'Please choose atleast one value for all rules'
        ],
        'actions.*.key' => [
            'required' => 'Please choose an action'
        ],
        'actions.*.value' => [
            'required_with' => 'Please choose atleast one value for all actions'
        ],
        'actions.*.meta.receiver' => [
            'required_if' => 'Please choose a receiver for the email'
        ],
        'actions.*.meta.subject' => [
          'required_if' => 'Please enter a subject for the email'
        ],
        'actions.*.meta.content' => [
            'required_if' =>'Please enter a content for the email'
        ],
        'rules.*.matching_value' => [
            'required_with' => 'Please choose atleast one value for all rules'
        ],
        'actions.*.action' => [
            'required_with' => 'Please choose atleast one value for all actions',
        ],
        'workflow.name' => [
            'required' => 'Please provide a name for this workflow',
            'max' => 'Workflow name may not be greater than :max',
            'unique' => 'Workflow name has already been choosen',
        ],
        'workflow.target' => [
            'required' => 'Please select a target channel for this workflow'
        ],
        'listeners.name' => [
            'required' => 'Please provide a name for this listener',
            'unique' => 'Listener with this name already exits',
        ],
        'department_list' => [
            'required_if' => 'You can not leave department field empty while auto-assignement is set for specific department'
        ],
        'amount_hourly' => [
            'required_if' => 'Amount per hour is required when billable is set as yes.'
        ],
        'd_id[]' => [
            'required_with' => 'Select one or more departments to share this response with department members'
        ]
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
