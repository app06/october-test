<?php namespace App06\Juniortestplugin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateApp06JuniortestpluginCategories extends Migration
{
    public function up()
    {
        Schema::create('app06_juniortestplugin_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('app06_juniortestplugin_categories');
    }
}
