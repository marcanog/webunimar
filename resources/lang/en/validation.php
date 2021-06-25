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

    'accepted' => 'The :attribute must be accepted.',
    'active_url' => 'The :attribute is not a valid URL.',
    'after' => 'The :attribute must be a date after :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => 'The :attribute can only contain letters.',
    'alpha_dash' => 'The :attribute can only contain letters, numbers, hyphens and underscores.',
    'alpha_num' => 'The :attribute can only contain letters and numbers.',
    'array' => 'The :attribute must be an array.',
    'before' => 'The :attribute must be a date before :date.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file' => 'The :attribute must be between :min and :max kilobytes.',
        'string' => 'The :attribute must be between :min and :max characters.',
        'array' => 'The :attribute must be between :min and :max items.',
    ],
    'boolean' => 'The :attribute must be true or false.',
    'confirmed' => 'The :attribute does not match the confirmation.',
    'date' => 'The :attribute is not a valid date.',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => 'The :attribute does not match the :format.',
    'different' => 'The :attribute and the :other must be different.',
    'digits' => 'The :attribute must be :digits digits digits.',
    'digits_between' => 'The :attribute must be between the :min and :max digits.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'email' => 'The :attribute must be a valid email address.',
    'ends_with' => 'The :attribute must end with one of the following: :values.',
    'exists' => 'The selected :attribute is invalid.',
    'file' => 'The :attribute must be a file.', 'file' => 'The :attribute must be a file.',
    'filled' => 'The :attribute field must have a value.',
    'gt' => [
        'numeric' => 'The :attribute field must be greater than :value.',
        'file' => 'The :attribute field must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute :must have more elements than :value.',
    ],
    'gte' => [
        'numeric' => 'The :attribute :must be greater than or equal to :value.',
        'file' => 'The :attribute :must be greater than or equal to :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal to the :character value.',
        'array' => 'The :attribute :must have :value elements or more.',
    ],
   'image' => 'The :attribute must be an image',
    'in' => 'The :attribute :selected is invalid',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'The :attribute field must be an integer',
    'ip' => 'The :attribute field must be a valid IP address',
    'ipv4' => 'The :attribute must be a valid IPv4 address',
    'ipv6' => 'The :attribute must be a valid IPv6 address',
    'json' => 'Attribute :must be a valid JSON string',
    'lt' => [
        'numeric' => 'The :attribute must be less than the value :.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute :must be less than :value characters.',
        'array' => 'Attribute :must have fewer elements than :value.',
    ],
    'lte' => [
        'numeric' => 'The :attribute :must be less than or equal to :value.',
        'file' => 'The :attribute :must be less than or equal to :value kilobytes.',
        'string' => 'The :attribute must be less than or equal to :value characters.',
        'array' => 'The :attribute :must have no more than :value elements.',
    ],
    'max' => [
        'numeric' => 'The :attribute :must not be greater than :max.',
        'file' => 'The :attribute :cannot be greater than :max kilobytes.',
        'string' => 'The attribute :cannot be greater than :max characters.',
        'array' => 'The :attribute :cannot have more elements than :max.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'The :attribute must be at least :min',
        'file' => 'The :attribute :must be at least :min kilobytes.',
        'string' => 'The :attribute :must be at least :min characters.',
        'array' => 'The :attribute :must have at least :min elements.',
    ],
    'not_in' => 'The :attribute selected is invalid.',
    'not_regex' => 'The format of the :attribute is invalid.',
    'numeric' => 'The :attribute must be a number',
    'password' => 'The password is incorrect',
    'present' => 'The :attribute field must be present.',
    'regex' => 'The format of :attribute is invalid.',
    'required' => 'The :attribute field is required',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_with' => 'The :attribute field is required unless :other is in :values.',
    'required_with_all' => 'The :attribute field is required when :values is present.',
    'required_without_all' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of the :values is present.',
    'same' => 'The :attribute and :other field must match',
    'size' => [
        'numeric' => 'The :attribute :must be :size',
        'file' => 'The :attribute :must be :size kilobytes.',
        'string' => 'The attribute :must be :size characters.',
        'array' => 'The :attribute :must contain :size elements.',
    ],
    'starts_with' => 'The :attribute :must start with one of the following: :values.',
    'string' => 'The :attribute :must be a string.',
    'timezone' => 'The :attribute must be a valid zone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute could not be uploaded.',
    'url' => 'The format of :attribute is invalid',
    'uuid' => 'The :attribute must be a valid UUID',

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
