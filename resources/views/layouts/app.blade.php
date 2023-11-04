<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="images/logo-polmed.png" type="image/png">
    <title>Beasiswa Polmed | {{$title}}</title>
    @include('partials.styles')
</head>
<body>
    <div class="container-scroller">
        @include('partials.navbar')
        <div class="container-fluid page-body-wrapper">
            @include('partials.sidebar')
            <div class="main-panel" styles="margin-top:-100px">
                @yield('content')
            </div>
        </div>
    </div>
    @include('partials.scripts')
</body>
<script>
$(function() {
  'use strict';
   @if(request()->is('dashboard'))
    var doughnutPieData = {
    datasets: [{
      data: [{{$totalMahasiswa}},{{$totalBeasiswa}}],
      backgroundColor: [
        'rgba(255, 99, 132, 0.5)',
        'rgba(54, 162, 235, 0.5)',
      ],
      borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
      ],
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
      'Total Mahasiswa',
      'Mahasiswa Beasiswa',
    ]
  };
    var doughnutPieOptions = {
    responsive: true,
    animation: {
      animateScale: true,
      animateRotate: true
    }
  };
 if ($("#doughnutChart").length) {
    var doughnutChartCanvas = $("#doughnutChart").get(0).getContext("2d");
    var doughnutChart = new Chart(doughnutChartCanvas, {
      type: 'doughnut',
      data: doughnutPieData,
      options: doughnutPieOptions
    });
  }
});
@endif
</script>
</html>
