<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Generalpayroll extends Model
{
    //
    protected $table='tblgeneralpayroll';
    protected $fillable=[
        
        'EMPLOYEEID',
        'BASESALARY',
        'NSSF',
        'HESLB',
        'LOAN',
        'ADVANCE',
        'DEDUCTIONS',
        'EARNINGS',
        'NETSALARY',
        'MONTH',
        'YEAR',
        

    ];
}
