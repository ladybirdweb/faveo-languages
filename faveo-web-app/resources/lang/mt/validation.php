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

    'accepted'   => 'L- :attribute għandhom jiġu aċċettati.',
    'active_url' => 'L- :attribute mhix URL valida.',
    'after'      => 'L- :attribute trid tkun data wara :date.',
    'alpha'      => "L- :attribute jista 'jkun fihom biss ittri.",
    'alpha_dash' => "L- :attribute jista 'jkun fihom biss ittri, numri u sing.",
    'alpha_num'  => "L- :attribute jista 'jkun fihom biss ittri u numri.",
    'array'      => 'L- :attribute għandu jkun array.',
    'before'     => 'L- :attribute trid tkun data qabel :date.',
    'between'    => [
        'numeric' => 'L- :attribute għandu jkun bejn :min u :max.',
        'file'    => 'L- :attribute għandu jkun bejn :min u :max kilobytes.',
        'string'  => 'L- :attribute għandu jkun bejn :min u :max karattri.',
        'array'   => 'L- :attribute għandu jkollu bejn :min u :max oġġetti.',
    ],
    'boolean'        => 'Il-qasam tal- :attribute għandu jkun veru jew falz.',
    'confirmed'      => 'L- :attribute konferma ma taqbilx.',
    'date'           => 'L- :attribute mhix data valida.',
    'date_format'    => 'L- :attribute ma taqbilx mal-format :format.',
    'different'      => 'L- :attribute u :other għandhom ikunu differenti.',
    'digits'         => 'L- :attribute għandu jkun :digits ċifri.',
    'digits_between' => 'L- :attribute għandu jkun bejn :min u :max ċifri.',
    'email'          => 'L- :attribute għandu jkun indirizz elettroniku validu.',
    'filled'         => 'Il-qasam tal- :attribute huwa meħtieġ.',
    'exists'         => 'L- :attribute magħżula mhix valida.',
    'image'          => 'L- :attribute trid tkun ritratt.',
    'in'             => 'L- :attribute magħżula mhix valida.',
    'integer'        => 'L- :attribute għandu jkun numru sħiħ.',
    'ip'             => 'L- :attribute għandu jkun indirizz IP validu.',
    'max'            => [
        'numeric' => 'L- :attribute ma jistax ikun akbar minn :max.',
        'file'    => 'L- :attribute ma jistax ikun akbar minn :max kilobytes.',
        'string'  => 'L- :attribute għandu jkun inqas minn :max characters.',
        'array'   => 'L- :attribute ma jistax ikun akbar minn :max oġġetti.',
    ],
    'mimes' => "L- :attribute għandu jkun fajl ta ' type: :values.",
    'min'   => [
        'numeric' => 'L- :attribute għandu jkun mill-inqas :min.',
        'file'    => 'L- :attribute għandu jkun mill-inqas :min kilobytes.',
        'string'  => 'L- :attribute għandu jkun mill-inqas  :min karattri.',
        'array'   => 'L- :attribute għandu jkollu mill-inqas :min oġġetti.',
    ],
    'not_in'               => 'L- :attribute magħżula mhix valida.',
    'numeric'              => 'L- :attribute għandu jkun numru.',
    'regex'                => 'Il-format tal- :attribute mhux validu.',
    'required'             => 'Il-qasam tal- :attribute huwa meħtieġ.',
    'required_if'          => 'Il-qasam tal- :attribute huwa meħtieġ meta :other is :value.',
    'required_with'        => 'Il-qasam tal- :attribute huwa meħtieġ meta :values huwa preżenti.',
    'required_with_all'    => 'Il-qasam tal- :attribute huwa meħtieġ meta :values huwa preżenti.',
    'required_without'     => 'Il-qasam tal- :attribute huwa meħtieġ meta :values mhix preżenti.',
    'required_without_all' => 'Il-qasam tal- :attribute huwa meħtieġ meta ;-ebda mill- :values huma preżenti.',
    'same'                 => 'L- :attribute u :other għandhom jaqblu.',
    'size'                 => [
        'numeric' => 'L- :attribute għandu jkun :size.',
        'file'    => 'L- :attribute għandu jkun :size kilobytes.',
        'string'  => 'L- :attribute għandu jkun :size karattri.',
        'array'   => 'L- :attribute must contain :size oġġetti.',
    ],
    'unique'   => 'L- :attribute diġà ttieħed.',
    'url'      => 'L- :attribute format mhux validu.',
    'timezone' => 'L- :attribute għandha tkun żona valida.',
    'uploaded' => "Id-daqs tal-fajl huwa akbar mid-daqs massimu permess għall-fajls imtella 'fuq is-server. Ipprova b'inqas daqs tal-fajl jew ikkuntattja lill-amministratur tas-sistema.",
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
            'required_unless' => 'Jekk jogħġbok agħżel valur antik',
            'required_if'     => 'Jekk jogħġbok agħżel valur antik'
        ],
        'events.*.new' => [
            'required_unless' => 'Jekk jogħġbok agħżel valur ġdid',
            'required_if'     => 'Jekk jogħġbok agħżel valur ġdid'
        ],
        'listeners.name' => [
            'required' => 'Jekk jogħġbok daħħal isem għas-semmiegħ',
        ],
        'listeners.name' => [
            'unique' => "Is-semmiegħ b'dan l-isem diġà jeżisti"
        ],
        'events.*.event' => [
            'required' => 'Jekk jogħġbok agħżel avveniment (i) biex tqajjem dan is-semmiegħ'
        ],
        'events.*.condition' => [
            'required' => 'Jekk jogħġbok agħżel il-kundizzjonijiet għall-avvenimenti kollha',
            'required_unless' => 'Jekk jogħġbok agħżel il-kundizzjonijiet għall-avvenimenti'
        ],
        'rules.*.condition' => [
            'required_with'=>'Jekk jogħġbok agħżel il-kundizzjonijiet għar-regoli kollha'
        ],
        'rules.*.value' => [
            'required_with' => 'Jekk jogħġbok agħżel mill-inqas valur wieħed għar-regoli kollha'
        ],
        'actions.*.key' => [
            'required' => 'Jekk jogħġbok agħżel azzjoni'
        ],
        'actions.*.value' => [
            'required_with' => 'Jekk jogħġbok agħżel mill-inqas valur wieħed għall-azzjonijiet kollha'
        ],
        'actions.*.meta.receiver' => [
            'required_if' => 'Jekk jogħġbok agħżel riċevitur għall-imejl'
        ],
        'actions.*.meta.subject' => [
          'required_if' => 'Jekk jogħġbok daħħal suġġett għall-imejl'
        ],
        'actions.*.meta.content' => [
            'required_if' =>'Jekk jogħġbok daħħal kontenut għall-imejl'
        ],
        'rules.*.matching_value' => [
            'required_with' => 'Jekk jogħġbok agħżel mill-inqas valur wieħed għar-regoli kollha'
        ],
        'actions.*.action' => [
            'required_with' => 'Jekk jogħġbok agħżel mill-inqas valur wieħed għall-azzjonijiet kollha',
        ],
        'workflow.name' => [
            'required' => 'Jekk jogħġbok ipprovdi isem għal dan il-fluss tax-xogħol',
            'max' => 'L - isem tal-fluss tax-xogħol ma jistax ikun akbar minn :max',
            'unique' => 'L-isem tal-fluss tax-xogħol diġà ġie magħżul',
        ],
        'workflow.target' => [
            'required' => 'Jekk jogħġbok agħżel kanal fil-mira għal dan il-fluss tax-xogħol'
        ],
        'listeners.name' => [
            'required' => 'Jekk jogħġbok ipprovdi isem għal dan is-semmiegħ',
            'unique' => "Is-semmiegħ b'dan l-isem diġà jeżisti",
        ],
        'department_list' => [
            'required_if' => 'Ma tistax tħalli l-qasam tad-dipartiment vojt waqt li l-assenjazzjoni awtomatika hija ssettjata għal dipartiment speċifiku'
        ],
        'amount_hourly' => [
            'required_if' => 'Ammont fis-siegħa huwa meħtieġ meta l-kontabbli huwa ssettjat bħala iva.'
        ],
        'd_id[]' => [
            'required_with' => 'Agħżel dipartiment wieħed jew aktar biex taqsam din ir-risposta mal-membri tad-dipartiment'
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
