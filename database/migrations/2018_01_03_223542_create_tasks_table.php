<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Task;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('task');
            $table->string('description');
            $table->boolean('done')->default(0);
        });

        Task::create([
            'task' => 'Weekend hookup',
            'description' => 'Call Helga in this afternoon',
            'done' => false,
        ]);

        Task::create([
            'task' => 'Latenight coding',
            'description' => 'Finishing coding POS API',
            'done' => false,
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
