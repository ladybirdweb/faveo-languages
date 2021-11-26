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

    'accepted'   => 'De :attribute må aksepteres.',
    'active_url' => 'De :attribute er ikke en gyldig nettadresse.',
    'after'      => 'De :attribute må være en dato etter :date.',
    'alpha'      => 'De :attribute kan bare inneholde bokstaver.',
    'alpha_dash' => 'De :attribute kan bare inneholde bokstaver, tall og streker.',
    'alpha_num'  => 'De :attribute kan bare inneholde bokstaver og tall.',
    'array'      => 'De :attribute må være en matrise.',
    'before'     => 'De :attribute må være en dato før :date.',
    'between'    => [
        'numeric' => 'De :attribute må være mellom :min og :max.',
        'file'    => 'De :attribute må være mellom :min og :max kilobyte.',
        'string'  => 'De :attribute må være mellom :min og :max tegn.',
        'array'   => 'De :attribute må ha mellom :min og :max elementer.',
    ],
    'boolean'        => 'De :attribute feltet må være sant eller usant.',
    'confirmed'      => 'De :attribute bekreftelse stemmer ikke overens.',
    'date'           => 'De :attribute er ikke en gyldig dato.',
    'date_format'    => 'De :attribute ikke samsvarer med formatet :format.',
    'different'      => 'De :attribute og: annet må være forskjellige.',
    'digits'         => 'De :attribute må være :digits sifre.',
    'digits_between' => 'De :attribute må være mellom :min  og :max siffer.',
    'email'          => 'De :attributeMå være en gyldig e-postadresse.',
    'filled'         => 'De :attribute feltet er påkrevd.',
    'exists'         => 'De valgt :attribute er ugyldig.',
    'image'          => 'De :attribute må være et bilde.',
    'in'             => 'De valgt :attribute er ugyldig.',
    'integer'        => 'De :attribute må være et heltall.',
    'ip'             => 'De :attribute må være en gyldig IP-adresse.',
    'max'            => [
        'numeric' => 'De :attribute kan ikke være større enn :max.',
        'file'    => 'De :attribute kan ikke være større enn :max kilobyte.',
        'string'  => 'De :attribute skal være mindre enn :max tegn.',
        'array'   => 'De :attribute kan ikke ha mer enn :max elementer.',
    ],
    'mimes' => 'De :attribute må være en fil av typen: :values.',
    'min'   => [
        'numeric' => 'De :attribute må være minst :min.',
        'file'    => 'De :attribute må være minst :min kilobyte.',
        'string'  => 'De :attribute må være minst :min tegn.',
        'array'   => 'De :attribute må ha minst :min elementer.',
    ],
    'not_in'               => 'De valgte :attribute er ugyldig.',
    'numeric'              => 'De :attribute må være et tall.',
    'regex'                => 'De :attribute formatet er ugyldig.',
    'required'             => 'De :attribute Feltet er påkrevet.',
    'required_if'          => 'De :attribute Feltet er nødvendig når :other er :value.',
    'required_with'        => 'De :attribute Feltet er nødvendig når :values er til stede.',
    'required_with_all'    => 'De :attribute Feltet er nødvendig når :values er til stede.',
    'required_without'     => 'De :attribute Feltet er nødvendig når :values er ikke til stede.',
    'required_without_all' => 'De :attribute Feltet er nødvendig når ingen av :value er tilstede.',
    'same'                 => 'De :attribute og :other må stemme overens.',
    'size'                 => [
        'numeric' => 'De :attribute må være :size.',
        'file'    => 'De :attribute må være: størrelse kilobyte.',
        'string'  => 'De :attribute må være :size tegn.',
        'array'   => 'De :attribute må inneholde: størrelse elementer.',
    ],
    'unique'   => 'De :attribute er allerede tatt.',
    'url'      => 'De :attribute formatet er ugyldig.',
    'timezone' => 'De :attribute må være en gyldig sone.',
    'uploaded' => 'Filstørrelsen er større enn maksimalt tillatt størrelse for opplastede filer på serveren. Prøv med mindre filstørrelse eller kontakt systemadministrator.',
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
            'rule-name' => 'egendefinertbeskjed',
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
