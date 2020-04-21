<?php
namespace App\Providers;
use App\TransaksiModel; // write model name here
use Illuminate\Support\ServiceProvider;
class DynamicServiceProvider2 extends ServiceProvider
{
public function boot()
{
        view()->composer('*',function($view){
        $view->with('transaksi', TransaksiModel::all());
    });
}

}
?>