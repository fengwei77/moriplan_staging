<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        if (!Schema::hasTable('web_menu')) {
            Schema::create('web_menu', function (Blueprint $table) {
                $table->collation = 'utf8mb4_unicode_ci';
                $table->increments('id');
                $table->string('title', 50);
                $table->string('alt_txt', 50);
                $table->string('url', 255);
                $table->string('action', 255);
                $table->string('lang', 50);
                $table->integer('enable')->default(0);
                $table->unsignedTinyInteger('order_number');
                $table->softDeletes();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('web_menu');
    }
}
