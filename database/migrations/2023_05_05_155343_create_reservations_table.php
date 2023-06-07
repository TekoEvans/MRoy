<?php

use App\Models\Cocktail;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\User;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('libelle');
            $table->string('description');
            $table->integer('nbrPeople');
            $table->string('telephone');
            $table->integer('isAccept')->default(2);
            $table->string('date');
            $table->string('lieu');
            $table->foreignIdFor(User::class);
            $table->string('type_Cocktail');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
