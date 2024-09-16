<?php
namespace App\Controllers\Pages;

use Core\View;

class Inventory {
    public function invoice(){
        View::draw('inventory/invoice');
    }
    public function forcast(){
        View::draw('inventory/stat');
    }
    public function sales(){
        View::draw('inventory/sales');
    }
    public function record(){
        View::draw('inventory/drag');
    }
}