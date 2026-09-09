<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Carbon;

class StatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        // Get monthly data for categories
        $categoryData = $this->getMonthlyData(\App\Models\Category::class);

        // Get monthly data for articles
        $articleData = $this->getMonthlyData(\App\Models\Article::class);

        // Get monthly data for advertisements
        $advertiseData = $this->getMonthlyData(\App\Models\Advertise::class);

        return [
            Stat::make('Total Categories', \App\Models\Category::count())
                ->description('Categories created this month')
                ->descriptionIcon('heroicon-m-folder')
                ->chart($categoryData)
                ->color('success'),

            Stat::make('Total Articles', \App\Models\Article::count())
                ->description('Articles created this month')
                ->descriptionIcon('heroicon-m-document-text')
                ->chart($articleData)
                ->color('primary'),

            Stat::make('Total ADvertisement', \App\Models\Advertise::count())
                ->description('Ads created this month')
                ->descriptionIcon('heroicon-m-megaphone')
                ->chart($advertiseData)
                ->color('warning'),
        ];
    }

    public function getColumnSpan(): int|string|array
    {
        return 'full';
    }

    public function getColumns(): int
    {
        return 3;
    }

    protected function getMonthlyData($model): array
    {
        $data = [];
        $now = Carbon::now();

        // Get data for the last 7 months
        for ($i = 6; $i >= 0; $i--) {
            $monthStart = $now->copy()->subMonths($i)->startOfMonth();
            $monthEnd = $now->copy()->subMonths($i)->endOfMonth();

            $count = $model::whereBetween('created_at', [$monthStart, $monthEnd])->count();
            $data[] = $count;
        }

        return $data;
    }
}
