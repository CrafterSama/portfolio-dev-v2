<?php

/**********************************************************************
 * Helper Object
 * --------------------------------------------------------------------
 * File: Helper.php
 * Author: Julmer Olivero <jolivero.03@gmail.com>
 * Licence: MIT
 * --------------------------------------------------------------------
 * El archivo Helper.php Contiene varias funciones con las cuales se
 * puede obtener el resultado deseado de algunos Objetos.
 **********************************************************************/

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Helper extends Model
{
    public static function successMessage($string = null)
    {
        $type = 'success';
        $text = is_string($string) ? $string : 'Request successful';

        return compact('type', 'text');
    }

    public static function errorMessage($string = null)
    {
        $type = 'error';
        $text = is_string($string) ? $string : 'Request unsuccessful';

        return compact('type', 'text');
    }
}