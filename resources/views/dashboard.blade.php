<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CCSJ Dashboard Test</title>
</head>
<body>
  <h1 class="">Laravel Dashboard Test</h1>

  {{-- demo charts --}}
  {{-- <x-dashboard>
    <livewire:chart-tile chartFactory="{{\Fidum\ChartTile\Examples\ExamplePieChart::class}}" position="a1:a2" height="140%"/>
    <livewire:chart-tile chartFactory="{{\Fidum\ChartTile\Examples\ExampleDoughnutChart::class}}" position="b1:b2" height="140%"/>
    <livewire:chart-tile chartFactory="{{\Fidum\ChartTile\Examples\ExamplePieChart::class}}" position="c1:c2" height="140%" />
    <livewire:chart-tile chartFactory="{{\Fidum\ChartTile\Examples\ExampleDoughnutChart::class}}" position="d1:d2" height="140%" />
    <livewire:chart-tile chartFactory="{{\Fidum\ChartTile\Examples\ExampleBarChart::class}}" position="a3:b4" />
    <livewire:chart-tile chartFactory="{{\Fidum\ChartTile\Examples\ExampleLineChart::class}}" position="c3:d4" />
    <livewire:chart-tile chartFactory="{{\Fidum\ChartTile\Examples\ExampleLineChart::class}}" position="a5:b6" />
    <livewire:chart-tile chartFactory="{{\Fidum\ChartTile\Examples\ExampleBarChart::class}}" position="c5:d6" />
    <livewire:chart-tile chartFactory="{{\Fidum\ChartTile\Examples\ExampleBarChart::class}}" position="a7:b8" />
    <livewire:chart-tile chartFactory="{{\Fidum\ChartTile\Examples\ExampleLineChart::class}}" position="c7:d8" />
  </x-dashboard> --}}

  <x-dashboard>
      {{-- replace this by any tiles --}}
      {{-- <livewire:accuweather-current-conditions-tile position="e1:e4" /> --}}
      {{-- <livewire:accuweather-five-day-forecast-tile position="a14:d16" /> --}}
      <livewire:chart-tile
          chartFactory="{{App\Charts\ExampleBarChart::class}}"
          position="a1:b2" />

      <livewire:chart-tile
          chartFactory="{{App\Charts\ExampleLineChart::class}}"
          position="c1:d2" />

      <livewire:chart-tile
          chartFactory="{{App\Charts\ExampleDoughnutChart::class}}"
          position="a3:b4" />

      <livewire:chart-tile
          chartFactory="{{App\Charts\ExamplePieChart::class}}"
          position="c3:d4" />

      {{-- <livewire:chart-tile chartFactory="{{App\Charts\ExampleDoughnutChart::class}}" position="a4:a6" /> --}}
      {{-- <livewire:chart-tile chartFactory="{{App\Charts\ExampleDoughnutChart::class}}" position="c4:c6" /> --}}
      {{-- <livewire:chart-tile
          chartFactory="{{App\Charts\DailyUsersChart::class}}"
          position="a5:d6" /> --}}

      <livewire:chart-tile
          chartFactory="{{App\Charts\ExampleLineChart::class}}"
          position="a5:d6" />
      {{-- <livewire:chart-tile chartFactory="{{App\Charts\ExamplePieChart::class}}" position="a10:a12" /> --}}
      {{-- <livewire:chart-tile chartFactory="{{App\Charts\DailyUsersChart::class}}" position="a1:a3" /> --}}
  </x-dashboard>


</body>
</html>
