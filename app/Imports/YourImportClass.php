<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;

class YourImportClass implements ToModel
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        //
    }

    public function model(array $row)
    {
        foreach ($row as $key => $value) {
            echo $key+$value;
        }
        // Define how to create a model from the Excel row data
        // return new YourModel([
            // 'column1' => $row[0],
            // 'column2' => $row[1],
            // Add more columns as needed
        // ]);
    }
}
