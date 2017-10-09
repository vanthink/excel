#Installation

Require this package in your `composer.json` and update composer. This will download the package and PHPExcel of PHPOffice.

#### Laravel 4

    "Vanthink/excel": "~1.3"
    
#### Laravel 5

    "Vanthink/excel": "~2.0"

After updating composer, add the ServiceProvider to the providers array in `app/config/app.php`

    'Vanthink\Excel\ExcelServiceProvider',

You can use the facade for shorter code. Add this to your aliasses:

    'Excel' => 'Vanthink\Excel\Facades\Excel',

The class is binded to the ioC as `excel`

    $excel = App::make('excel');
