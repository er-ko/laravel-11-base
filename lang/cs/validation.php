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

    'accepted' => 'Pole atributu musí být akceptováno.',
    'accepted_if' => 'Pole atributu musí být akceptováno když :other je :value.',
    'active_url' => 'Pole atributu musí být platná URL adresa.',
    'after' => 'Pole atributu musí být datum po :date.',
    'after_or_equal' => 'Pole atributu musí být datum po nebo rovno :date.',
    'alpha' => 'Pole atributu musí obsahovat pouze písmena.',
    'alpha_dash' => 'Pole atributu musí obsahovat pouze písmena, číslice, pomlčky a podtržítka.',
    'alpha_num' => 'Pole atributu musí obsahovat pouze písmena a číslice.',
    'array' => 'Pole atributu musí být pole.',
    'ascii' => 'Pole atributu musí obsahovat pouze alfanumerické znaky a symboly.',
    'before' => 'Pole atributu musí být datum před :date.',
    'before_or_equal' => 'Pole atributu musí být datum před nebo rovno :date.',
    'between' => [
        'array' => 'Pole atributu musí mít mezi :min a :max položek.',
        'file' => 'Pole atributu musí být mezi :min a :max kilobajty.',
        'numeric' => 'Pole atributu musí být mezi :min a :max.',
        'string' => 'Pole atributu musí být mezi :min a :max znaky.',
    ],
    'boolean' => 'Pole atributu musí být pravde nebo nepravda.',
    'can' => 'Pole atributu obsahuje nepovolenou hodnotu.',
    'confirmed' => 'Pole atributu nepotvrzuje schodu.',
    'current_password' => 'Heslo není správné.',
    'date' => 'Pole atributu musí být platné datum.',
    'date_equals' => 'Pole atributu musí být datum rovné :date.',
    'date_format' => 'Pole atributu musí odpovídat formátu :format.',
    'decimal' => 'Pole atributu musí mít :decimal desetinných míst.',
    'declined' => 'Pole atributu musí být odmítnuto.',
    'declined_if' => 'Pole atributu musí být odmítnuto když :other je :value.',
    'different' => 'Pole atributu a :other musí být odlišené.',
    'digits' => 'Pole atributu musí být :digits digitů.',
    'digits_between' => 'Pole atributu musí být mezi :min a :max digity.',
    'dimensions' => 'Pole atributu má neplatné rozměry obrázku.',
    'distinct' => 'Pole atributu má duplicitní hodnotu.',
    'doesnt_end_with' => 'Pole atributu nesmí končit jedním z následujících: :values.',
    'doesnt_start_with' => 'Pole atributu nesmí začínat jedním z následujících: :values.',
    'email' => 'Pole atributu musí být platná emailová adresa.',
    'ends_with' => 'Pole atributu musí končit jedním z následujících: :values.',
    'enum' => 'Zvolený :attribute je neplatný.',
    'exists' => 'Zvolený :attribute je neplatný.',
    'extensions' => 'Pole atributu musí mít jedno z následujících rozšíření: :values.',
    'file' => 'Pole atributu musí být soubor.',
    'filled' => 'Pole atributu musí mít hodnotu.',
    'gt' => [
        'array' => 'Pole atributu musí mít více, než :value položek.',
        'file' => 'Pole atributu musí být větší, než :value kilobajtů.',
        'numeric' => 'Pole atributu musí být větší, než :value.',
        'string' => 'Pole atributu musí být větší, než :value znaků.',
    ],
    'gte' => [
        'array' => 'Pole atributu musí mít :value položek nebo více.',
        'file' => 'Pole atributu musí být větší nebo rovno :value kilobajtů.',
        'numeric' => 'Pole atributu musí být větší nebo rovno :value.',
        'string' => 'Pole atributu musí být větší nebo rovno :value znaků.',
    ],
    'hex_color' => 'Pole atributu musí mít platnou hexadecimální barvu.',
    'image' => 'Pole atributu musí být obrázek.',
    'in' => 'Zvolený :attribute je neplatný.',
    'in_array' => 'Pole atributu musí existovat v :other.',
    'integer' => 'Pole atributu musí být číslo.',
    'ip' => 'Pole atributu musí být platná IP adresa.',
    'ipv4' => 'Pole atributu musí být platná IPv4 adresa.',
    'ipv6' => 'Pole atributu musí být platná IPv6 adresa.',
    'json' => 'Pole atributu musí být platný JSON řetězec.',
    'list' => 'Pole atributu musí být seznam.',
    'lowercase' => 'Pole atributu musí být malými písmeny.',
    'lt' => [
        'array' => 'Pole atributu musí mít méně, nže :value položek.',
        'file' => 'Pole atributu musí mít méně, než :value kilobajtů.',
        'numeric' => 'Pole atributu musí mít méně, než :value.',
        'string' => 'Pole atributu musí mít méně, než :value znaky.',
    ],
    'lte' => [
        'array' => 'Pole atributu musí mít více, než :value položek.',
        'file' => 'Pole atributu musí být menší nebo rovno :value kilobajtů.',
        'numeric' => 'Pole atributu musí být méně nebo rovno :value.',
        'string' => 'Pole atributu musí být méně nebo rovno :value znaků.',
    ],
    'mac_address' => 'Pole atributu musí být platná MAC adresa.',
    'max' => [
        'array' => 'Pole atributu nesmí mít více, než :max položek.',
        'file' => 'Pole atributu nesmí být větší, než :max kilobajtů.',
        'numeric' => 'Pole atributu nesmí být větší, než :max.',
        'string' => 'Pole atributu nesmí být větší, než :max znaků.',
    ],
    'max_digits' => 'Pole atributu nemůže mít více, než :max digitů.',
    'mimes' => 'Pole atributu musí být soubor typu: :values.',
    'mimetypes' => 'Pole atributu musí být soubor typu: :values.',
    'min' => [
        'array' => 'Pole atributu musí mít minimálně :min položek.',
        'file' => 'Pole atributu musí být nejméně :min kilobajtů.',
        'numeric' => 'Pole atributu musí být nejméně :min.',
        'string' => 'Pole atributu musí být nejméně :min znaků.',
    ],
    'min_digits' => 'Pole atributu musí mít minimálně :min digitů.',
    'missing' => 'Pole atributu musí chybět.',
    'missing_if' => 'Pole atributu musí chybět, když :other je :value.',
    'missing_unless' => 'Pole atributu musí chybět, pokud :other je :value.',
    'missing_with' => 'Pole atributu musí chybět, když :values je present.',
    'missing_with_all' => 'Pole atributu musí chybět, když :values jsou present.',
    'multiple_of' => 'Pole atributu musí být násobkem :value.',
    'not_in' => 'Zvolený :attribute není platný.',
    'not_regex' => 'Pole atributu formát není platný.',
    'numeric' => 'Pole atributu musí být číslo.',
    'password' => [
        'letters' => 'Pole atributu musí obsahovat alespoň jedno písmeno.',
        'mixed' => 'Pole atributu musí obsahovat alespoň jedno velké a jedno malé písmeno.',
        'numbers' => 'Pole atributu musí obsahovat alespoň jedno číslo.',
        'symbols' => 'Pole atributu musí obsahovat alespoň jeden symbol.',
        'uncompromised' => 'Daný :attribute se objevil při úniku dat. Prosím vyberte jiný :attribute.',
    ],
    'present' => 'Pole atributu musí být přítomen.',
    'present_if' => 'Pole atributu musí být přítomen, když :other je :value.',
    'present_unless' => 'Pole atributu musí být přítomen, pokud :other je :value.',
    'present_with' => 'Pole atributu musí být přítomen, když :values je present.',
    'present_with_all' => 'Pole atributu musí být přítomen, když :values jsou present.',
    'prohibited' => 'Pole atributu je zakázáno.',
    'prohibited_if' => 'Pole atributu je zakázáno, když :other je :value.',
    'prohibited_unless' => 'Pole atributu je zakázáno, pokud :other je v :values.',
    'prohibits' => 'Pole atributu zakazuje :other přítomnost.',
    'regex' => 'Pole atributu formát není platný.',
    'required' => 'Pole atributu je vyžadováno.',
    'required_array_keys' => 'Pole atributu musí obsahovat položky pro: :values.',
    'required_if' => 'Pole atributu je vyžadováno, když :other je :value.',
    'required_if_accepted' => 'Pole atributu je vyžadováno, když :other je akceptováno.',
    'required_if_declined' => 'Pole atributu je vyžadováno, když :other je odmítnuto.',
    'required_unless' => 'Pole atributu je vyžadováno, pokud :other je v :values.',
    'required_with' => 'Pole atributu je vyžadováno, když :values je přítomen.',
    'required_with_all' => 'Pole atributu je vyžadováno, když :values jsou přítomny.',
    'required_without' => 'Pole atributu je vyžadováno, když :values není přítomen.',
    'required_without_all' => 'Pole atributu je vyžadováno, když žádné z of :values není přítomno.',
    'same' => 'Pole atributu musí odpovídat :other.',
    'size' => [
        'array' => 'Pole atributu musí obsahovat :size položek.',
        'file' => 'Pole atributu musí být :size kilobajtů.',
        'numeric' => 'Pole atributu musí být :size.',
        'string' => 'Pole atributu musí být :size znaků.',
    ],
    'starts_with' => 'Pole atributu musí začínat jedním za následujících: :values.',
    'string' => 'Pole atributu musí být řetězec.',
    'timezone' => 'Pole atributu musí být platné časové pásmo.',
    'unique' => 'Pole atributu již bylo použito.',
    'uploaded' => 'Pole atributu k nahrání.',
    'uppercase' => 'Pole atributu musí být velkými písmeny.',
    'url' => 'Pole atributu musí být platná URL.',
    'ulid' => 'Pole atributu musí být platné ULID.',
    'uuid' => 'Pole atributu musí být platné UUID.',

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
