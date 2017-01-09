<?php

use Illuminate\Database\Seeder;

class TodoListsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("SET FOREIGN_KEY_CHECKS=0");
        DB::table('tasks')->truncate();
        DB::table('todo_lists')->truncate();

        $todoLists = [];
        $tasks = [];
        for ($i = 1; $i <= 10; $i++)
        {
            $date = date("Y-m-d H:i:s", strtotime("2017-01-01 08:00:00 + {$i} days"));
            $todoLists[] = [
                'id' => $i,
                'title' => "Todo list {$i}",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'user_id' => rand(1, 2),
                'created_at' => $date,
                'updated_at' => $date,
            ];

            for($j = 1; $j<= rand(1,5); $j++)
            {
              $tasks[] = [
                'todo_list_id' => $i,
                'title' => "The task {$j} of todo list {$i}",
                'created_at' => $date,
                'updated_at' => $date,
                'completed_at' => rand(0,1) == 0 ? NULL : $date
              ];
            }
        }

        DB::table('todo_lists')->insert($todoLists);
        DB::table('tasks')->insert($tasks);
    }
}
