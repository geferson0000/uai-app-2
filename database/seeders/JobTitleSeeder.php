<?php

namespace Database\Seeders;

use App\Models\JobTitle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// use Illuminate\Database\SjjojojobTItlee;
use Illuminate\Database\Seeder;


class JobTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = ['administrador de soporte', 'auditor I', 'auditor II', 'lider', 'especialista', 'consultor', 'coordinador', 'gerente'];

        foreach($names as $name)
        {
            $jobTitle = new Jobtitle();
            $jobTitle->name = $name;
            $jobTitle->save();
        }
    }
}
