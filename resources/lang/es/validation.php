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

    'accepted' => 'El :attribute debe ser aceptado.',
    'active_url' => 'El :attribute no es una URL válida.',
    'after' => 'El :attribute debe ser una fecha posterior a :date.',
    'after_or_equal' => 'El :attribute debe ser una fecha posterior o igual a :date.',
    'alpha' => 'El :attribute solo puede contener letras.',
    'alpha_dash' => 'El :attribute sólo puede contener letras, números, guiones y guiones bajos.',
    'alpha_num' => 'EL :attribute sólo puede contener letras y números.',
    'array' => 'El :attribute debe ser una matriz.',
    'before' => 'El :attribute debe ser una fecha anterior a :date.',
    'before_or_equal' => 'El :attribute debe ser una fecha anterior o igual a :date.',
    'between' => [
        'numeric' => 'El :attribute debe estar entre :min y :max.',
        'file' => 'The :attribute debe estar entre :min y :max kilobytes.',
        'string' => 'The :attribute debe estar entre :min y :max characters.',
        'array' => 'The :attribute debe estar entre :min y :max items.',
    ],
    'boolean' => 'El :attribute debe ser verdadero o falso.',
    'confirmed' => 'El :attribute confirmation no coincide.',
    'date' => 'El :attribute no es una fecha válida.',
    'date_equals' => 'El :atributo debe ser una fecha igual a :date.',
    'date_format' => 'El :atributo no coincide con el formato :format.',
    'different' => 'El :attribute y el :other deben ser diferentes.',
    'digits' => 'El :attribute debe ser :digits digits.',
    'digits_between' => 'El :atributo debe estar entre los dígitos :min y :max.',
    'dimensions' => 'El :atributo tiene dimensiones de imagen no válidas.',
    'distinct' => 'El campo :attribute tiene un valor duplicado.',
    'email' => 'El :attribute debe ser una dirección de correo electrónico válida.',
    'ends_with' => 'El :atributo debe terminar con uno de los siguientes: :valores.',
    'exists' => 'El :atributo seleccionado no es válido.',
    'file' => 'El :atributo debe ser un archivo.',
    'filled' => 'El campo :attribute debe tener un valor.',
    'gt' => [
        'numeric' => 'El campo :attribute debe ser mayor que :value.',
        'file' => 'El campo :attribute debe ser mayor que :value kilobytes.',
        'string' => 'El atributo :debe ser mayor que :value caracteres.',
        'array' => 'El atributo :debe tener más elementos que :value.',
    ],
    'gte' => [
        'numeric' => 'El atributo :debe ser mayor o igual que :value.',
        'file' => 'El atributo :debe ser mayor o igual que :value kilobytes.',
        'string' => 'El atributo :debe ser mayor o igual que el valor :caracteres',
        'array' => 'El atributo :debe tener elementos :value o más.',
    ],
    'image' => 'El atributo :debe ser una imagen',
    'in' => 'El atributo :seleccionado no es válido',
    'in_array' => 'El campo :attribute no existe en :other.',
    'integer' => 'El campo :attribute debe ser un entero',
    'ip' => 'El campo :attribute debe ser una dirección IP válida',
    'ipv4' => 'El atributo :debe ser una dirección IPv4 válida',
    'ipv6' => 'El atributo :debe ser una dirección IPv6 válida',
    'json' => 'El atributo :debe ser una cadena JSON válida',
    'lt' => [
        'numeric' => 'El atributo :debe ser menor que el valor :.',
        'file' => 'El atributo :debe ser menor que :value kilobytes.',
        'string' => 'El atributo :debe ser menor que :value caracteres.',
        'array' => 'El atributo :debe tener menos elementos que :value.',
    ],
    'lte' => [
        'numeric' => 'El atributo :debe ser menor o igual que :value.',
        'file' => 'El atributo :debe ser menor o igual que :value kilobytes.',
        'string' => 'El :atributo debe ser menor o igual que :valor caracteres.',
        'array' => 'El atributo :no debe tener más de elementos :value.',
    ],
    'max' => [
        'numeric' => 'El atributo :no puede ser mayor que :max',
        'file' => 'El atributo :no puede ser mayor que :max kilobytes.',
        'string' => 'El atributo :no puede ser mayor que :max caracteres',
        'array' => 'El atributo :no puede tener más elementos que :max.',
    ],
    'mimes' => 'El atributo :debe ser un archivo de tipo: :values.',
    'mimetypes' => 'El atributo :debe ser un archivo de tipo: :values.',
    'min' => [
        'numeric' => 'El atributo :debe ser al menos :min',
        'file' => 'El atributo :debe ser al menos :min kilobytes.',
        'string' => 'El atributo :debe tener al menos :min caracteres.',
        'array' => 'El atributo :debe tener al menos :min elementos.',
    ],
    'not_in' => 'El atributo :seleccionado no es válido.',
    'not_regex' => 'El formato del :atributo no es válido.',
    'numeric' => 'El atributo :debe ser un número',
    'password' => 'La contraseña es incorrecta',
    'present' => 'El campo :attribute debe estar presente.',
    'regex' => 'El formato de :atributo no es válido.',
    'required' => 'El campo :attribute es obligatorio',
    'required_if' => 'El campo :attribute es obligatorio cuando :other es :value.',
    'required_unless' => 'El campo :attribute es obligatorio a menos que :other esté en :values.',
    'required_with' => 'El campo :attribute es obligatorio cuando :values está presente',
    'required_with_all' => 'El campo :attribute es obligatorio cuando :values está presente.',
    'required_without' => 'El campo :attribute es obligatorio cuando :values no está presente.',
    'required_without_all' => 'El campo :attribute es obligatorio cuando ninguno de los :values está presente.',
    'same' => 'El campo :attribute y :other deben coincidir',
    'size' => [
        'numeric' => 'El atributo :debe ser :size',
        'file' => 'El atributo :debe ser :size kilobytes.',
        'string' => 'El atributo :debe ser :size caracteres.',
        'array' => 'El atributo :debe contener elementos :size.',
    ],
    'starts_with' => 'El atributo :debe empezar por uno de los siguientes: :valores',
    'string' => 'El atributo :debe ser una cadena.',
    'timezone' => 'El atributo :debe ser una zona válida.',
    'unique' => 'El atributo :ya ha sido tomado.',
    'uploaded' => 'El atributo :no se ha podido cargar',
    'url' => 'El formato de :atributo no es válido',
    'uuid' => 'El :atributo debe ser un UUID válido',

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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
