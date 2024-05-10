<?php

namespace Database\Seeders;

use App\Models\Companies;
use App\Models\CompanyLeadProject;
use App\Models\LeadCustomFields;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $company = Companies::create(['company_name' => 'Bleron']);
        $project = CompanyLeadProject::create(['company_id' => $company->id, 'project_name' => 'krankenkasse']);

        $leadCustomField = LeadCustomFields::insert([
            [
                'company_id' => $company->id,
                'project_id' => $project->id,
                'input_name' => 'krankenkasse',
                'input_type' => 'text',
                'default_value' => '',
                'attributes' => '',
                'is_required' => 1
            ],
            [
                'company_id' => $company->id,
                'project_id' => $project->id,
                'input_name' => 'testfield',
                'input_type' => 'date',
                'default_value' => '',
                'attributes' => '',
                'is_required' => 1
            ],
            [
                'company_id' => $company->id,
                'project_id' => $project->id,
                'input_name' => 'testfield2',
                'input_type' => 'text',
                'default_value' => '',
                'attributes' => '',
                'is_required' => 1
            ],
            [
                'company_id' => $company->id,
                'project_id' => $project->id,
                'input_name' => 'testfield3',
                'input_type' => 'text',
                'default_value' => '',
                'attributes' => '',
                'is_required' => 1
            ]
        ]
        );
    }
}
