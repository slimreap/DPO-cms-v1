<?php

namespace App\Filament\Widgets;

use DateTime;
use App\Models\Theme;
use Filament\Widgets\BarChartWidget;

class ThemeApprovalChart extends BarChartWidget
{
    protected static ?string $heading = 'Chart';

    protected function getHeading(): string
    {
        return 'Approved Themes';
    }

    public static function canView(): bool
    {
        return auth()->user()->hasRole(['super-admin', 'admin']);
    }

    protected int | string | array $columnSpan = [
        'md' => 2,
        'xl' => 3,
    ];

    protected function getData(): array
    {
        $currentDateTime = [
            'Jan' => 0,
            'Feb' => 0,
            'Mar' => 0,
            'Apr' => 0,
            'May' => 0,
            'Jun' => 0,
            'Jul' => 0,
            'Aug' => 0,
            'Sep' => 0,
            'Oct' => 0,
            'Nov' => 0,
            'Dec' => 0,
        ];
        
        $approvaldate = Theme::all();
        foreach($approvaldate as $date)
        { 


            
            if ($dateObj = DateTime::createFromFormat('Y-m-d H:i:s', $date->approval_date)) {
                $date = DateTime::createFromFormat('Y-m-d H:i:s', $date->approval_date)->format('M');
            } else {

            }

        //    $date = $date->format('M');
            
           if($date === 'Jan')
           {
            $currentDateTime['Jan'] += 1;
           }
           elseif($date === 'Feb')
           {
            $currentDateTime['Feb'] += 1;
           }
           elseif($date === 'Mar')
           {
            $currentDateTime['Mar'] += 1;
           }
           elseif($date === 'Apr')
           {
            $currentDateTime['Apr'] += 1;
           }
           elseif($date === 'May')
           {
            $currentDateTime['May'] += 1;
           }
           elseif($date === 'Jun')
           {
            $currentDateTime['Jun'] += 1;
           }
           elseif($date === 'Jul')
           {
            $currentDateTime['Jul'] += 1;
           }
           elseif($date === 'Aug')
           {
            $currentDateTime['Aug'] += 1;
           }
           elseif($date === 'Sep')
           {
            $currentDateTime['Sep'] += 1;
           }
           elseif($date === 'Oct')
           {
            $currentDateTime['Oct'] += 1;
           }
           elseif($date === 'Nov')
           {
            $currentDateTime['Nov'] += 1;
           }
           elseif($date === 'Dec')
           {
            $currentDateTime['Dec'] += 1;
           }
        }
        
        return [
            'datasets' => [
                [
                    'label' => 'Blog posts created',
                    'data' => [$date, $currentDateTime['Feb'], $currentDateTime['Mar'], $currentDateTime['Apr'], $currentDateTime['May'], $currentDateTime['Jun'], $currentDateTime['Jul'], $currentDateTime['Aug'], $currentDateTime['Sep'], $currentDateTime['Oct'], $currentDateTime['Nov'], $currentDateTime['Dec']],
                ],
            ],
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        ];
    }
}
