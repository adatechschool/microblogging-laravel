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
        Schema::create('posts', function (Blueprint $table) {
            $table->id('post_id'); // Crée une colonne d'identifiant auto-incrémentée nommée 'post_id'
            $table->timestamp('date_creation')->useCurrent(); // Utilise le timestamp actuel comme valeur par défaut
            $table->unsignedBigInteger('author_id'); // Assurez-vous que cela correspond au type de la clé primaire dans 'users'
            $table->text('post_content');
            $table->text('url_img')->nullable(); // Rend ce champ facultatif

            $table->foreign('author_id') // Définit une contrainte de clé étrangère
                  ->references('id')->on('users') // 'id' est la clé primaire dans la table 'users'
                  ->onDelete('cascade'); // Optionnel : spécifie ce qui arrive lorsque le 'user' correspondant est supprimé
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
