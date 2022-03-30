<?php
namespace CihatAlkis\VatanSoft\Facades;

/**
 * Laravel 9 VatanSoft SMS
 * @license MIT License
 * @author Cihat Alkis <cihataklis@icloud.com>
 * @link https://cihatalkis.pw
 *
 */

use Illuminate\Support\Facades\Facade;

class VatanSoft extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'VatanSoft';
    }
}
