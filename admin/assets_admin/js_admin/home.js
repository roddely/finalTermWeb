// {/* <script>
//     const revenueData = <?php echo json_encode($revenues); ?>;

//     const labels = revenueData.map(data => data.orderDate); // Ngày
//     const dataPoints = revenueData.map(data => parseFloat(data.totalRevenue)); // Doanh thu
// </script> */}


function drawRevenueChart(labels, dataPoints) {
    const ctx = document.getElementById('revenueChart').getContext('2d');
    const revenueChart = new Chart(ctx, {
        type: 'line', // Loại biểu đồ
        data: {
            labels: labels, // Ngày
            datasets: [{
                label: 'Revenue',
                data: dataPoints, // Doanh thu
                borderColor: 'rgba(75, 192, 192, 1)',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderWidth: 2,
                tension: 0.4 // Độ cong của đường
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: true,
                    position: 'top'
                }
            },
            scales: {
                x: {
                    title: {
                        display: true,
                        text: 'Date'
                    }
                },
                y: {
                    title: {
                        display: true,
                        text: 'Revenue ($)'
                    },
                    beginAtZero: true
                }
            }
        }
    });
}

$(document).ready(function () {
    const urlParam = new URLSearchParams(window.location.search);
    if (urlParam.get('page') === 'home') {
        $.ajax({
            url: '/ajax/dashboard.php',
            type: 'GET',
            dataType: 'json',
            success: function (revenues) {
                const labels = revenues.map(data => data.orderDate); // Ngày
                const dataPoints = revenues.map(data => parseFloat(data.totalRevenue)); // Doanh thu

                drawRevenueChart(labels, dataPoints);
            }
        });
    }
});

