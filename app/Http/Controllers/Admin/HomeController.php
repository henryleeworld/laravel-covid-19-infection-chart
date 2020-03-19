<?php

namespace App\Http\Controllers\Admin;

use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class HomeController
{
    public function index()
    {
        $settings1 = [
            'chart_title'           => '依國家和日期分類病例（Cases）', // 依國家和日期分類病例
            'chart_type'            => 'line',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\\Infection',
            'conditions'            => [
                ['name' => '台灣', 'condition' => 'country_id = 211', 'color' => 'green'],
                ['name' => '日本', 'condition' => 'country_id = 105', 'color' => 'blue'],
                ['name' => '土耳其', 'condition' => 'country_id = 220', 'color' => 'red'],
            ],
            'group_by_field'        => 'report_date',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'sum',
            'aggregate_field'       => 'infections',
            'filter_field'          => 'created_at',
            'group_by_field_format' => 'Y-m-d',
            'column_class'          => 'col-md-12',
            'entries_number'        => '5',
        ];

        $chart1 = new LaravelChart($settings1);

        return view('home', compact('chart1'));
    }
}
