<?php

use App\Models\Task;
use Illuminate\Database\Seeder;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Task::create([
            'title' => 'Editar arquivos de teste',
            'description' => 'Alterar erros no arquvio de teste',
            'status' => ('A fazer'),
            'user_id' => 2,
        ]);
    }
}
