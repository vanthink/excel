<?php

include_once 'classes/CsvTestImport.php';

class CsvExcelFileTest extends TestCase {


    public function testInit()
    {
        $importer = app('CsvTestImport');
        $this->assertInstanceOf('Vanthink\Excel\Files\ExcelFile', $importer);
    }


    public function testGetResultsDirectlyWithCustomDelimiterSetAsProperty()
    {
        $importer = app('TestImport');
        $results = $importer->get();

        $this->assertInstanceOf('Vanthink\Excel\Collections\RowCollection', $results);
        $this->assertCount(5, $results);
    }

}