<?php namespace Vanthink\Excel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 *
 * LaravelExcel Facade
 *
 * @category   Laravel Excel
 * @version    1.0.0
 * @package    Vanthink/excel
 * @copyright  Copyright (c) 2013 - 2014 Vanthink (http://www.Vanthink.nl)
 * @author     Vanthink <info@Vanthink.nl>
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt    LGPL
 */
class Excel extends Facade {

    /**
     * Return facade accessor
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'excel';
    }
}