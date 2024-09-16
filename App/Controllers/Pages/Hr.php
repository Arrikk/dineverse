<?php

namespace App\Controllers\Pages;

use Core\View;

class Hr
{
    public function employees()
    {
        View::draw('hr/employee');
    }
    public function overview()
    {
        View::draw('hr/index');
    }
    public function calender()
    {
        View::draw('hr/smart_calender');
    }
    public function schedule()
    {
        View::draw('hr/employee-schedule');
    }
}
