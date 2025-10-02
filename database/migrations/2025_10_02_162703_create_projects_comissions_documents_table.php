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
        Schema::create('projects_comissions_documents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_comission_id');
            $table->foreign('project_comission_id')->references('id')->on('projects_comissions')->onUpdate('cascade')->onDelete('cascade');
            $table->string('name', 255);
            $table->string('path', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects_comissions_documents');
    }
};
