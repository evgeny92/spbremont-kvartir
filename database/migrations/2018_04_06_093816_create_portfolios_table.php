<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfoliosTable extends Migration {
   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up(){
      Schema::create('portfolios', function(Blueprint $table){
         $table->increments('id');
         $table->string('portfolio_title');
         $table->string('portfolio_slug')->unique();
         $table->string('apartment_project');
         $table->string('apartment_area');
         $table->string('type_repair');
         $table->string('year_implementation');
         $table->string('deadline');
         $table->timestamps();
      });
   }

   /**
    * Reverse the migrations.
    *
    * @return void
    */
   public function down(){
      Schema::dropIfExists('portfolios');
   }
}
