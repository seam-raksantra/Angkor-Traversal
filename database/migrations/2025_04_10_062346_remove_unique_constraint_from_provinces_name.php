<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveUniqueConstraintFromProvincesName extends Migration
{
    public function up()
    {
        // Remove the unique constraint from the 'name' column in the 'provinces' table
        Schema::table('provinces', function (Blueprint $table) {
            $table->dropUnique(['name']); // This drops the unique constraint
        });
    }

    public function down()
    {
        // If you need to revert the change, re-add the unique constraint
        Schema::table('provinces', function (Blueprint $table) {
            $table->unique('name'); // This adds the unique constraint back
        });
    }
}
