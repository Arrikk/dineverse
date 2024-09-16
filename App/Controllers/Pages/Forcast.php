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
    public function insight(){
        View::draw('forcast/insight');
    }
    public function inventory(){
        View::draw('forcast/inventory');
    }
}