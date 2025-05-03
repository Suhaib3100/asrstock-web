<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class UpdateProductCounts extends Migration
{
    public function up()
    {
        $products = DB::table('products')->get();
        
        foreach ($products as $product) {
            DB::table('products')
                ->where('id', $product->id)
                ->update([
                    'total_watch' => rand(70000, 100000),
                    'download_products_count' => rand(7000, 10000)
                ]);
        }
    }

    public function down()
    {
        // No rollback needed for this migration
    }
} 