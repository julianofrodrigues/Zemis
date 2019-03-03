<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $quantity
 * @property string $descricao
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */

class colecao extends Model
{
    protected $fillable = ['name', 'quantity', 'descricao', 'created_at', 'updated_at', 'deleted_at'];
}
