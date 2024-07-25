<?php
namespace App\Controllers\Pages;

use Core\View;

class Hr {
    public function employees(){
        View::draw('hr/employee');
    }
    public function overview(){
        View::draw('hr/employee-overview');
    }
    public function schedule(){
        View::draw('hr/employee-schedule');
    }
}