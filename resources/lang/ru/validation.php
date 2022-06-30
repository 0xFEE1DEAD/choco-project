<?php

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

return [
    'accepted'             => 'Вы должны принять.',
    'accepted_if'          => 'Вы должны принять, когда :other соответствует :value.',
    'active_url'           => 'Значение поля не является действительным URL.',
    'after'                => 'Значение поля должно быть датой после :date.',
    'after_or_equal'       => 'Значение поля должно быть датой после или равной :date.',
    'alpha'                => 'Значение поля может содержать только буквы.',
    'alpha_dash'           => 'Значение поля может содержать только буквы, цифры, дефис и нижнее подчеркивание.',
    'alpha_num'            => 'Значение поля может содержать только буквы и цифры.',
    'array'                => 'Значение поля должно быть массивом.',
    'before'               => 'Значение поля должно быть датой до :date.',
    'before_or_equal'      => 'Значение поля должно быть датой до или равной :date.',
    'between'              => [
        'array'   => 'Количество элементов в поле должно быть между :min и :max.',
        'file'    => 'Размер файла в поле должен быть между :min и :max Килобайт(а).',
        'numeric' => 'Значение поля должно быть между :min и :max.',
        'string'  => 'Количество символов в поле должно быть между :min и :max.',
    ],
    'boolean'              => 'Значение поля должно быть логического типа.',
    'confirmed'            => 'Значение поля не совпадает с подтверждаемым.',
    'current_password'     => 'Неверный пароль.',
    'date'                 => 'Значение поля не является датой.',
    'date_equals'          => 'Значение поля должно быть датой равной :date.',
    'date_format'          => 'Значение поля не соответствует формату даты :format.',
    'declined'             => 'Поле должно быть отклонено.',
    'declined_if'          => 'Поле должно быть отклонено, когда :other равно :value.',
    'different'            => 'Значения полей и :other должны различаться.',
    'digits'               => 'Длина значения цифрового поля должна быть :digits.',
    'digits_between'       => 'Длина значения цифрового поля должна быть между :min и :max.',
    'dimensions'           => 'Изображение в поле имеет недопустимые размеры.',
    'distinct'             => 'Значения поля не должны повторяться.',
    'email'                => 'Значение поля должно быть действительным электронным адресом.',
    'ends_with'            => 'Поле должно заканчиваться одним из следующих значений: :values',
    'enum'                 => 'Выбранное значение некорректно.',
    'exists'               => 'Выбранное значение некорректно.',
    'file'                 => 'В поле должен быть указан файл.',
    'filled'               => 'Поле обязательно для заполнения.',
    'gt'                   => [
        'array'   => 'Количество элементов в поле должно быть больше :value.',
        'file'    => 'Размер файла в поле должен быть больше :value Килобайт(а).',
        'numeric' => 'Значение поля должно быть больше :value.',
        'string'  => 'Количество символов в поле должно быть больше :value.',
    ],
    'gte'                  => [
        'array'   => 'Количество элементов в поле должно быть :value или больше.',
        'file'    => 'Размер файла в поле должен быть :value Килобайт(а) или больше.',
        'numeric' => 'Значение поля должно быть :value или больше.',
        'string'  => 'Количество символов в поле должно быть :value или больше.',
    ],
    'image'                => 'Файл в поле должен быть изображением.',
    'in'                   => 'Выбранное значение некорректно.',
    'in_array'             => 'Значение поля не существует в :other.',
    'integer'              => 'Значение поля должно быть целым числом.',
    'ip'                   => 'Значение поля должно быть действительным IP-адресом.',
    'ipv4'                 => 'Значение поля должно быть действительным IPv4-адресом.',
    'ipv6'                 => 'Значение поля должно быть действительным IPv6-адресом.',
    'json'                 => 'Значение поля должно быть JSON строкой.',
    'lt'                   => [
        'array'   => 'Количество элементов в поле должно быть меньше :value.',
        'file'    => 'Размер файла в поле должен быть меньше :value Килобайт(а).',
        'numeric' => 'Значение поля должно быть меньше :value.',
        'string'  => 'Количество символов в поле должно быть меньше :value.',
    ],
    'lte'                  => [
        'array'   => 'Количество элементов в поле должно быть :value или меньше.',
        'file'    => 'Размер файла в поле должен быть :value Килобайт(а) или меньше.',
        'numeric' => 'Значение поля должно быть :value или меньше.',
        'string'  => 'Количество символов в поле должно быть :value или меньше.',
    ],
    'mac_address'          => 'Значение поля должно быть корректным MAC-адресом.',
    'max'                  => [
        'array'   => 'Количество элементов в поле не может превышать :max.',
        'file'    => 'Размер файла в поле не может быть больше :max Килобайт(а).',
        'numeric' => 'Значение поля не может быть больше :max.',
        'string'  => 'Количество символов в поле не может превышать :max.',
    ],
    'mimes'                => 'Файл в поле должен быть одного из следующих типов: :values.',
    'mimetypes'            => 'Файл в поле должен быть одного из следующих типов: :values.',
    'min'                  => [
        'array'   => 'Количество элементов в поле должно быть не меньше :min.',
        'file'    => 'Размер файла в поле должен быть не меньше :min Килобайт(а).',
        'numeric' => 'Значение поля должно быть не меньше :min.',
        'string'  => 'Количество символов в поле должно быть не меньше :min.',
    ],
    'multiple_of'          => 'Значение поля должно быть кратным :value',
    'not_in'               => 'Выбранное значение некорректно.',
    'not_regex'            => 'Значение поля некорректно.',
    'numeric'              => 'Значение поля должно быть числом.',
    'password'             => 'Некорректный пароль.',
    'present'              => 'Значение поля должно присутствовать.',
    'prohibited'           => 'Значение поля запрещено.',
    'prohibited_if'        => 'Значение поля запрещено, когда :other равно :value.',
    'prohibited_unless'    => 'Значение поля запрещено, если :other не состоит в :values.',
    'prohibits'            => 'Значение поля запрещает присутствие :other.',
    'regex'                => 'Значение поля некорректно.',
    'required'             => 'Поле обязательно для заполнения.',
    'required_array_keys'  => 'Массив в поле обязательно должен иметь ключи: :values',
    'required_if'          => 'Поле обязательно для заполнения, когда :other равно :value.',
    'required_unless'      => 'Поле обязательно для заполнения, когда :other не равно :values.',
    'required_with'        => 'Поле обязательно для заполнения, когда :values указано.',
    'required_with_all'    => 'Поле обязательно для заполнения, когда :values указано.',
    'required_without'     => 'Поле обязательно для заполнения, когда :values не указано.',
    'required_without_all' => 'Поле обязательно для заполнения, когда ни одно из :values не указано.',
    'same'                 => 'Значения полей и :other должны совпадать.',
    'size'                 => [
        'array'   => 'Количество элементов в поле должно быть равным :size.',
        'file'    => 'Размер файла в поле должен быть равен :size Килобайт(а).',
        'numeric' => 'Значение поля должно быть равным :size.',
        'string'  => 'Количество символов в поле должно быть равным :size.',
    ],
    'starts_with'          => 'Поле должно начинаться с одного из следующих значений: :values',
    'string'               => 'Значение поля должно быть строкой.',
    'timezone'             => 'Значение поля должно быть действительным часовым поясом.',
    'unique'               => 'Такое значение поля уже существует.',
    'uploaded'             => 'Загрузка поля не удалась.',
    'url'                  => 'Значение поля имеет ошибочный формат URL.',
    'uuid'                 => 'Значение поля должно быть корректным UUID.',
    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
];
