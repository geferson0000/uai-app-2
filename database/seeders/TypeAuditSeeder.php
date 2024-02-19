<?php

namespace Database\Seeders;

use App\Models\TypeAudit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeAuditSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $typeAudits = 
            [['name' => 'auditoria de cumplimiento', 'code' => 'ac'],
            ['name' => 'auditoria financiera', 'code' => 'af'],
            ['name' => 'auditoria de inspeccion', 'code' => 'ains'],
            ['name' => 'auditoria de inventario', 'code' => 'ainv'],
            ['name' => 'auditoria de gestion', 'code' => 'ag'],
            ['name' => 'auditoria de seguimiento', 'code' => 'ase'],
            ['name' => 'auditoria de sistemas', 'code' => 'asi'],
            ['name' => 'examen de la cuenta', 'code' => 'ec'],
            ['name' => 'auditoria de proyeto', 'code' => 'ap'],
            ['name' => 'auditoria de operativa', 'code' => 'ao'],
            ['name' => 'acta de entrega', 'code' => 'ae']];

        foreach($typeAudits as $type)
        {
            $typeAudit = new TypeAudit();
            $typeAudit->name = $type['name'];
            $typeAudit->code = $type['code'];
            $typeAudit->save();
        }
    }
}
