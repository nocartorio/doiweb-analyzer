<?php

namespace DOIWeb\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class DOICodeSituacaoConstrucao extends UuidModelAbstract implements HasFieldInterface
{
    use SoftDeletes;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'doiweb_code_situacao_construcao';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code', 'value'
    ];
}
