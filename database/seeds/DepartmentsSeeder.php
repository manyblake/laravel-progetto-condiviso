<?php

use Illuminate\Database\Seeder;
use App\Department;

class DepartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = [
            [
               'name' => 'biologia',
               'address' => 'via roma',
               'phone' => '0624343461',
               'email' => 'biologia@gmail.com', 
            ]
        ];

        foreach ($departments as $department) {
            $newdepartment = new Department ();
            $newdepartment->name = $department ['name'];
            $newdepartment->address = $department ['address'];
            $newdepartment->phone = $department ['phone'];
            $newdepartment->email = $department ['email'];

            $newdepartment-> save();
        }

    }
}
