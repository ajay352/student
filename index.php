<!DOCTYPE html>
<html>
<head>
    <title>Student Mark Details</title>
    <!-- Include Chart.js library -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Include jQuery for AJAX -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<style>
    #chart-container {
    width: 400px;
    height: 400px;
    
}

</style>
<body>
    <h2>Student Mark Details(Ajay)</h2>
    <button id="view-button" data-student-id="">View Marks</button>

    <!-- Chart container -->
    <div id="chart-container" style="display:none;  ">
        <canvas id="pieChart"></canvas>
        
    </div>
    
    

    <script>
        $(document).ready(function() {
            // Handle button click event
            $("#view-button").click(function() {
                const studentId = $(this).data("student-id");
                fetchStudentMarks(studentId);
            });
        });

        function fetchStudentMarks(studentId) {
            $.ajax({
                url: "get_student_marks.php",
                type: "GET",
                data: { student_id: studentId },
                success: function(data) {
                    const marks = JSON.parse(data);
                    displayPieChart(marks);
                },
                error: function() {
                    alert("Failed to fetch student marks.");
                }
            });
        }

        function displayPieChart(marks) {
            const chartContainer = document.getElementById("chart-container");
            chartContainer.style.display = "block";

            const pieChartCanvas = document.getElementById("pieChart");

            new Chart(pieChartCanvas, {
                type: 'pie',
                data: {
                    labels: Object.keys(marks),
                    datasets: [{
                        data: Object.values(marks),
                        backgroundColor: ['blue', 'green', 'red', 'orange', 'purple', 'pink'],
                    }],
                },
            });
        }
    </script>
</body>
</html>
