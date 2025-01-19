<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('customers')) {
            Schema::create('customers', function (Blueprint $table) {
                $table->id();
                $table->string('name', 255);
                $table->string('email', 255)->unique();
                $table->string('cpf_or_cnpj', 14)->unique(); // CPF tem 11 dígitos, CNPJ tem 14, sem formatação.
                $table->string('phone_number', 13)->unique();
                $table->string('address_street')->nullable();
                $table->string('street', 255);
                $table->string('neighborhood', 255);
                $table->string('city', 255);
                $table->string('state', 255);
                $table->string('country', 255);
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('customer_files')) {
            Schema::create('customer_files', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('customer_id');
                $table->date('due_date');
                $table->decimal('total_amount', 10, 2);
                $table->boolean('has_interest')->default(false);
                $table->decimal('interest_rate', 5, 2)->nullable();
                $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('products')) {
            Schema::create('products', function (Blueprint $table) {
                $table->id();
                $table->foreignId('customer_file_id')->constrained('customer_files')->onDelete('cascade');
                $table->string('name', 255);
                $table->string('category', 255);
                $table->integer('quantity')->default(0);
                $table->decimal('price', 10, 2);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasTable('products')) {
            Schema::dropIfExists('products');
        }

        if (Schema::hasTable('customer_files')) {
            Schema::dropIfExists('customer_files');
        }

        if (Schema::hasTable('customers')) {
            Schema::dropIfExists('customers');
        }
    }
};
