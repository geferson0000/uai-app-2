<?php

namespace Database\Seeders;

use App\Models\Action;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $action1 = new Action();
        $action1->code = 'AC-001';
        $action1->target = 'Gerencia Operaciones Centralizadas TI';
        $action1->save();

        $action2 = new Action();
        $action2->code = 'AC-002';
        $action2->target = 'Gerencia General Operaciones Centralizadas TI';
        $action2->save();



        $action3 = new Action();
        $action3->code = 'AC-003';
        $action3->target = 'Gerencia Energia y climatizacion';
        $action3->save();


        $action4 = new Action();
        $action4->code = 'AC-004';
        $action4->target = 'Gerencia General Sistemas';
        $action4->save();
    }
}
