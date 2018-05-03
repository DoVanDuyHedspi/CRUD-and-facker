<?php
/**
 * Created by PhpStorm.
 * User: Van Duy
 * Date: 5/2/2018
 * Time: 11:31 PM
 */

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class GuzzleClient extends Facade
{
    protected static function getFacadeAccessor() { return 'guzzle_client'; }
}