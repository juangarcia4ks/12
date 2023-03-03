<?php
  session_start();

  // Validamos que exista una session y ademas que el cargo que exista sea igual a 1 (Administrador)
  if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 2){
    header('location: https://csn.4ks.global');
	  exit;

  }

?>
<!DOCTYPE html>
<html>
<head>
<title>simple app demo php Chart JS Doughnut</title>
<link rel='stylesheet' href='style.css' type='text/css' />
</head>
<body>
    <div class="phppot-container">
        <h1>Chart JS Doughnut</h1>
        <div>
            <canvas id="chartjs-doughnut"></canvas>
        </div>
    </div>
    <script
        src="https://cdn.jsdelivr.net/npm/chart.js@4.0.1/dist/chart.umd.min.js"></script>
    <script>
        new Chart(document.getElementById("chartjs-doughnut"), {
            type: 'doughnut',
            data: {
                labels: ["Lion", "Horse", "Elephant", "Tiger",
                    "Jaguar"],
                datasets: [{
                    backgroundColor: ["#51EAEA", "#FCDDB0",
                        "#FF9D76", "#FB3569", "#82CD47"],
                    data: [418, 263, 434, 586, 332]
                }]
            },
            options: {
                title: {
                    display: true,
                    text: 'Chart JS Doughnut.'
                },
                cutout: '60%', // the portion of the doughnut that is the cutout in the middle
                radius: 200
            }
        });         
	</script>
</body>
</html>

