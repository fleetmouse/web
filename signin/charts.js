document.addEventListener("DOMContentLoaded", function () {
  // Radar Chart
  const radarData = {
    labels: ['Stability', 'Openness', 'Agreeableness', 'Extraversion', 'Conscientiousness', 'Neuroticism', 'Running'],
    datasets: [{
      label: '',
      data: [65, 59, 90, 81, 56, 55, 40],
      fill: true,
      backgroundColor: 'rgba(34, 87, 122, 0.2)',
      borderColor: '#22577A', 
      pointBackgroundColor: '#22577A', 
      pointBorderColor: '#fff',
      pointHoverBackgroundColor: '#fff',
      pointHoverBorderColor: '#22577A' // 
    },
    {
      label: '',
      data: [50, 70, 60, 90, 70, 80, 60], 
      fill: true,
      backgroundColor: 'rgba(241, 135, 1, 0.2)', 
      borderColor: '#f18701', 
      pointBackgroundColor: '#f18701', 
      pointBorderColor: '#fff',
      pointHoverBackgroundColor: '#fff',
      pointHoverBorderColor: '#f18701' 
    }]
  };

  const radarConfig = {
    type: 'radar',
    data: radarData,
  };

  var radarCtx = document.getElementById('myRadarChart').getContext('2d');
  var myRadarChart = new Chart(radarCtx, radarConfig);

  // Line Chart
  const lineData = {
    labels: ['January', 'February', 'March', 'April', 'May', 'June'],
    datasets: [{
      label: 'Academic performance ',
      data: [65, 59, 75, 80, 90, 92],
      fill: false,
      borderColor: 'rgb(75, 192, 192)',
      tension: 0.1
    }]
  };

  const lineConfig = {
    type: 'line',
    data: lineData,
  };

  var lineCtx = document.getElementById('myLineChart').getContext('2d');
  var myLineChart = new Chart(lineCtx, lineConfig);
});

