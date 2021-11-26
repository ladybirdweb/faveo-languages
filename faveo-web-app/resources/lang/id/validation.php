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

    'accepted'   => ':attribute ini harus diterima.',
    'active_url' => ':attribute bukan alamat URL yang valid.',
    'after'      => ':attribute must be a date after :date.',
    'alpha'      => ':attribute hanya boleh berisi huruf.',
    'alpha_dash' => ':attribute hanya boleh berisi huruf, angka dan strip.',
    'alpha_num'  => ':attribute hanya boleh berisi huruf dan angka.',
    'array'      => ':attribute harus sebuah array.',
    'before'     => ':attribute harus tanggal sebelum :date.',
    'between'    => [
        'numeric' => ':attribute harus antara :min dan :max.',
        'file'    => ':attribute harus antara :min dan :max kilobytes.',
        'string'  => ':attribute harus antara :min dan :max karakter.',
        'array'   => ':attribute harus antara :min dan :max item.',
    ],
    'boolean'        => 'Bidang :attribute harus benar atau salah.',
    'confirmed'      => ':attribute konfirmasi atribut tidak cocok.',
    'date'           => ':attribute bukan tanggal yang valid.',
    'date_format'    => ':attribute tidak cocok dengan format :format.',
    'different'      => ':attribute dan :other harus berbeda.',
    'digits'         => ':attribute harus :digits digits.',
    'digits_between' => ':attribute harus diantara :min dan :max digits.',
    'email'          => ':attribute harus alamat email yang valid.',
    'filled'         => 'Bidang :attribute wajib diisi.',
    'exists'         => ':attribute yang dipilih tidak valid.',
    'image'          => ':attribute harus berupa gambar.',
    'in'             => ':attribute yang dipilih tidak valid.',
    'integer'        => ':attribute harus berupa bilangan bulat.',
    'ip'             => ':attribute harus alamat IP yang valid.',
    'max'            => [
        'numeric' => ':attribute tidak boleh lebih dari :max.',
        'file'    => ':attribute tidak boleh lebih dari :max kilobytes.',
        'string'  => ':attribute harus kurang dari :max characters.',
        'array'   => ':attribute tidak boleh memiliki lebih dari :max items.',
    ],
    'mimes' => 'file :attribute harus berupa tipe: :values.',
    'min'   => [
        'numeric' => 'The :attribute must be at least :min.',
        'file'    => 'The :attribute must be at least :min kilobytes.',
        'string'  => 'The :attribute must be at least :min characters.',
        'array'   => 'The :attribute must have at least :min items.',
    ],
    'not_in'               => ':attribute yang dipilih tidak valid.',
    'numeric'              => ':attribute harus berupa angka.',
    'regex'                => 'Format :attribute tidak valid.',
    'required'             => 'Bidang :attribute diperlukan.',
    'required_if'          => 'Bidang :attribute doperlukan saat :other adalah :value.',
    'required_with'        => 'Bidang :attribute diperlukan saat :values tersedia.',
    'required_with_all'    => 'Bidang :attribute diperlukan saat :values tersedia.',
    'required_without'     => 'Bidang :attribute diperlukan saat :values tidak tersedia.',
    'required_without_all' => 'Bidang :attribute diperlukan jika tidak ada :values tersedia.',
    'same'                 => ':attribute dan :other harus cocok.',
    'size'                 => [
        'numeric' => ':attribute harus :size.',
        'file'    => ':attribute harus :size kilobytes.',
        'string'  => ':attribute harus :size karakter.',
        'array'   => ':attribute wajib mengandung :size barang.',
    ],
    'unique'   => ':attribute sudah diambil.',
    'url'      => 'format :attribute tidak valid.',
    'timezone' => ':attribute harus berupa zona yang valid.',
    'uploaded' => 'Ukuran file lebih besar dari ukuran maksimum yang diizinkan untuk file yang diunggah di server. Coba dengan ukuran file yang lebih sedikit atau kontak admin sistem.',
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
            'required_unless' => 'Silakan pilih nilai lama',
            'required_if'     => 'Silakan pilih nilai lama'
        ],
        'events.*.new' => [
            'required_unless' => 'Silakan pilih nilai baru',
            'required_if'     => 'Silakan pilih nilai baru'
        ],
        'listeners.name' => [
            'required' => 'Silakan masukan nama untuk pendengar',
        ],
        'listeners.name' => [
            'unique' => 'Pendengar dengan nama ini sudah ada'
        ],
        'events.*.event' => [
            'required' => 'Silakan pilih acara untuk memicu pendengar ini'
        ],
        'events.*.condition' => [
            'required' => 'Silakan pilih setidaknya satu nilai untuk semua acara',
            'required_unless' => 'Silakan pilih kondisi untuk acara tersebut'
        ],
        'rules.*.condition' => [
            'required_with'=>'Silakan pilih ketentuan untuk semua aturan'
        ],
        'rules.*.value' => [
            'required_with' => 'Silakan pilih setidaknya satu nilai untuk semua peraturan'
        ],
        'actions.*.key' => [
            'required' => 'Silahkan pilih aksi'
        ],
        'actions.*.value' => [
            'required_with' => 'Silakan pilih setidaknya satu nilai untuk semua tindakan'
        ],
        'actions.*.meta.receiver' => [
            'required_if' => 'Silahkan pilih penerima untuk email'
        ],
        'actions.*.meta.subject' => [
          'required_if' => 'Silahkan masukan subjek untuk email'
        ],
        'actions.*.meta.content' => [
            'required_if' =>'Silakan masukkan konten untuk email'
        ],
        'rules.*.matching_value' => [
            'required_with' => 'Silahkan pilih setidaknya satu nilau untuk semua peraturan'
        ],
        'actions.*.action' => [
            'required_with' => 'Silakan pilih setidaknya satu nilai untuk semua tindakan',
        ],
        'workflow.name' => [
            'required' => 'Harap berikan nama untuk alur kerja ini',
            'max' => 'Nama alur kerja tidak boleh lebih dari :max',
            'unique' => 'Nama alur kerja telah dipilih',
        ],
        'workflow.target' => [
            'required' => 'Silakan pilih channel target untuk alur kerja ini'
        ],
        'listeners.name' => [
            'required' => 'Harap berikan nama untuk pendengar ini',
            'unique' => 'Pendengar dengan nama ini sudah ada',
        ],
        'department_list' => [
            'required_if' => 'Anda tidak dapat meninggalkan bidang departemen kosong saat penugasan otomatis diatur untuk departemen tertentu'
        ],
        'amount_hourly' => [
            'required_if' => 'Jumlah per jam diperlukan ketika tagihan ditetapkan sebagai ya.'
        ],
        'd_id[]' => [
            'required_with' => 'Pilih satu atau lebih departemen untuk membagikan tanggapan ini dengan anggota departemen'
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
