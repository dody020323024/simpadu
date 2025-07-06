<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDeletedAtToProdiTable extends Migration
{
    public function up()
    {
        Schema::table('prodi', function (Blueprint $table) {
            $table->softDeletes(); // Ini menambahkan kolom deleted_at
        });
    }

    public function down()
    {
        Schema::table('prodi', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
}