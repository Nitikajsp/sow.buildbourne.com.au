<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('parties', function (Blueprint $table) {
            $table->enum('part_type', ['builder', 'owner'])->after('state')->default('owner');
        });
    }

    public function down()
    {
        Schema::table('parties', function (Blueprint $table) {
            $table->dropColumn('part_type');
        });
    }
};
