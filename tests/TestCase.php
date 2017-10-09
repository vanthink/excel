<?php

use Orchestra\Testbench\TestCase as TestBenchTestCase;

class TestCase extends TestBenchTestCase
{

    public function testExcelClass()
    {
        $excel = App::make('Vanthink\Excel\Excel');
        $this->assertInstanceOf('Vanthink\Excel\Excel', $excel);
    }


    protected function getPackageProviders($app)
    {
        return array('Vanthink\Excel\ExcelServiceProvider');
    }


    protected function getPackagePath()
    {
        return realpath(implode(DIRECTORY_SEPARATOR, array(
            __DIR__,
            '..',
            'src',
            'Vanthink',
            'Excel'
        )));
    }

}