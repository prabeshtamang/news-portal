<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use Illuminate\Support\Carbon;
use App\Models\Article;

class ArticlePostsChart extends ChartWidget
{
    protected ?string $heading = 'Article Trends';

    protected static ?int $sort = 2;

    protected int|string|array $columnSpan = 'full';

    protected function getData(): array
    {
        // Get current month stats
        $currentMonth = Carbon::now()->month;
        $previousMonth = Carbon::now()->subMonth()->month;

        $monthlyStats = [
            'current' => Article::whereMonth('created_at', $currentMonth)
                                ->whereYear('created_at', Carbon::now()->year)
                                ->count(),
            'previous' => Article::whereMonth('created_at', $previousMonth)
                                ->whereYear('created_at', Carbon::now()->subMonth()->year)
                                ->count(),
        ];

        $growth = $monthlyStats['previous'] > 0
            ? round((($monthlyStats['current'] - $monthlyStats['previous']) / $monthlyStats['previous']) * 100, 1)
            : 0;

        // Get last 6 months data with labels
        $data = [];
        $labels = [];

        for ($i = 5; $i >= 0; $i--) {
            $date = Carbon::now()->subMonths($i);
            $startOfMonth = $date->copy()->startOfMonth();
            $endOfMonth = $date->copy()->endOfMonth();

            $count = Article::whereBetween('created_at', [$startOfMonth, $endOfMonth])->count();

            $labels[] = $date->format('M Y');
            $data[] = $count;
        }

        return [
            'datasets' => [
                [
                    'label' => 'Articles Published',
                    'data' => $data,
                    'backgroundColor' => 'rgba(54, 162, 235, 0.5)',
                    'borderColor' => 'rgb(54, 162, 235)',
                    'borderWidth' => 2,
                    'hoverBackgroundColor' => 'rgba(54, 162, 235, 0.8)',
                    'hoverBorderColor' => 'rgb(54, 162, 235)',
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }

    protected function getOptions(): array
    {
        return [
            'indexAxis' => 'x',
            'responsive' => true,
            'maintainAspectRatio' => false,
            'plugins' => [
                'legend' => [
                    'display' => false,
                ],
                'tooltip' => [
                    'enabled' => true,
                    'mode' => 'index',
                    'intersect' => false,
                    'callbacks' => [
                        'label' => 'function(context) {
                            return context.raw + " articles";
                        }',
                    ],
                ],
            ],
            'scales' => [
                'y' => [
                    'beginAtZero' => true,
                    'grid' => [
                        'drawBorder' => true,
                    ],
                    'ticks' => [
                        'stepSize' => 1,
                        'callback' => 'function(value) { return value + " articles" }',
                    ],
                ],
                'x' => [
                    'grid' => [
                        'display' => false,
                    ],
                ],
            ],
        ];
    }
}
