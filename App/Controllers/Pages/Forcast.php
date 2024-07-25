<?php
namespace App\Controllers\Pages;

use Core\View;

class Forcast {
    public function sales(){
        View::draw('forcast/sales');
    }
    public function calender(){
        View::draw('forcast/calender');
    }
    // public function schedule(){
    //     View::draw('hr/employee-schedule');
    // }
}