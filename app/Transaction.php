<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
/**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'transactions';

    protected $fillable = [
        'location', 'cost', 'user_id',
    ];
}
