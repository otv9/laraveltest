<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder {

	public function run()
	{
		DB::table('tasks')->delete();

		$tasks = array(
			['id' =>1, 'name'=> 'task 1', 'slug'=> 'task-1','project_id'=> 1,'completed'=>false,'description'=> 'my first task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' =>2, 'name'=> 'task 2', 'slug'=> 'task-2','project_id'=> 1,'completed'=>false,'description'=> 'my first task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' =>3, 'name'=> 'task 3', 'slug'=> 'task-3','project_id'=> 1,'completed'=>false,'description'=> 'my first task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' =>4, 'name'=> 'task 4', 'slug'=> 'task-4','project_id'=> 1,'completed'=>true,'description'=> 'my second task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' =>5, 'name'=> 'task 5', 'slug'=> 'task-5','project_id'=> 1,'completed'=>true,'description'=> 'my third task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' =>6, 'name'=> 'task 6', 'slug'=> 'task-6','project_id'=> 2,'completed'=>true,'description'=> 'my fourth task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' =>7, 'name'=> 'task 7', 'slug'=> 'task-7','project_id'=> 2,'completed'=>false,'description'=> 'my fifth task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
		);

		DB::table('tasks')->insert($tasks);

	}
}