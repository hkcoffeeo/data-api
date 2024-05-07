<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('singapore_savings_bonds', function (Blueprint $table) {
            $table->id();
            $table->string('issue_code')->unique();
            $table->string('isin_code');
            $table->date('issue_date');
            $table->date('maturity_date');
            $table->json('interest_step_up_years_percentage');
            $table->json('average_per_annum_return_percentage');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('singapore_savings_bonds');
    }
};
