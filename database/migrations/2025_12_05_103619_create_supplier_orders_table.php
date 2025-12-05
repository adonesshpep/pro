<?php

use App\Models\Supplier;
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
        Schema::create('supplier_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Supplier::class)->constrained()->onDelete('cascade');
            $table->date('order_date');
            $table->string('status')->default('pending'); // pending, received, canceled
            $table->decimal('subtotal', 10, 2);
            $table->decimal('tax_amount', 10, 2);
            $table->decimal('total_amount', 10, 2);
            $table->string('currency', 3)->default('SEK');
            $table->text('notes')->nullable();
            $table->timestamps();
        });
        Schema::create('product_supplier_order', function (Blueprint $table) {
            $table->id();
            $table->foreignId('supplier_order_id')->constrained()->onDelete('cascade');
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->decimal('unit_price', 10, 2);
            $table->integer('quantity');
            $table->decimal('tax_rate', 5, 2)->default(0);
            $table->decimal('tax_amount', 10, 2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_supplier_order');
        Schema::dropIfExists('supplier_orders');
    }
};
