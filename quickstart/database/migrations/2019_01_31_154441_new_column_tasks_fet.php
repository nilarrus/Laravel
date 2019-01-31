<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NewColumnTasksFet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //New Column Fet on Table tasks
        Schema::table('tasks', function (Blueprint $tasks) {
            $tasks->boolean('fet')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Drop column Fet on Table tasks
        Schema::table('tasks', function (Blueprint $table) {
            $table->dropColumn('fet');
        });
    }
}
