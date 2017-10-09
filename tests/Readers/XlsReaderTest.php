<?php

require_once('traits/ImportTrait.php');
require_once('traits/SingleImportTestingTrait.php');

use Mockery as m;
use Vanthink\Excel\Readers\LaravelExcelReader;
use Vanthink\Excel\Classes;

class XlsReaderTest extends TestCase {

    /**
     * Import trait
     */
    use ImportTrait, SingleImportTestingTrait;

    /**
     * Filename
     * @var string
     */
    protected $fileName = 'files/test.xls';

}