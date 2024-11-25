// Dados dos gráficos
const charts = {
    chart1: null,
    chart2: null,
    chart3: null,
    chart4: null,
    chart5: null,
    chart6: null // Novo gráfico de Acesso Mensal
};

// Função que retorna os dados dos gráficos
function getDataForChart(id) {
    switch (id) {
        case 'chart1':
            return {
                labels: ['Semana 1', 'Semana 2', 'Semana 3', 'Semana 4'],
                datasets: [{
                    label: 'Atendimentos',
                    data: [50, 60, 70, 80],
                    backgroundColor: ['#3498db', '#9b59b6', '#e74c3c', '#f1c40f'],
                }]
            };
        case 'chart2':
            return {
                labels: ['Técnico', 'CAD', 'FIC', 'Superior'],
                datasets: [{
                    label: 'Cursos',
                    data: [25, 35, 20, 20],
                    backgroundColor: ['#1abc9c', '#e67e22', '#34495e', '#9b59b6'],
                }]
            };
        case 'chart3':
            return {
                labels: ['Em Aberto'],
                datasets: [{
                    label: 'Atendimentos em Aberto',
                    data: [30],
                    backgroundColor: ['#e74c3c'],
                }]
            };
        case 'chart4':
            return {
                labels: ['Concluídos'],
                datasets: [{
                    label: 'Atendimentos Concluídos',
                    data: [70],
                    backgroundColor: ['#2ecc71'],
                }]
            };
        case 'chart5':
            return {
                labels: ['Pendentes'],
                datasets: [{
                    label: 'Atendimentos Pendentes',
                    data: [40],
                    backgroundColor: ['#f39c12'],
                }]
            };
        case 'chart6':  // Dados para o novo gráfico
            return {
                labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril'],
                datasets: [{
                    label: 'Acesso Mensal',
                    data: [10, 15, 12, 18],  // Exemplo de dados
                    backgroundColor: ['#1abc9c'],
                    borderColor: '#16a085',
                    fill: false,  // Define como 'false' para gráfico de linhas
                    tension: 0.1  // Para suavizar a linha
                }]
            };
    }
}

// Função para criar o gráfico
function createChart(id, type, data) {
    const ctx = document.getElementById(id).getContext('2d');
    if (charts[id]) {
        charts[id].destroy();
    }
    charts[id] = new Chart(ctx, {
        type: type,
        data: data,
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
}

// Função para alternar entre gráfico de barras e linhas
function toggleChart(id) {
    const currentType = charts[id].config.type;
    const newType = currentType === 'bar' ? 'line' : 'bar';
    const newData = getDataForChart(id);
    createChart(id, newType, newData);
}
function highlightChart(chartId) {
    // Remove a classe 'highlight' de todos os gráficos
    const allCharts = document.querySelectorAll('.chart-container');
    allCharts.forEach(chart => {
        chart.classList.remove('highlight');
    });

    // Adiciona a classe 'highlight' ao gráfico correspondente
    const selectedChart = document.getElementById(chartId);
    selectedChart.classList.add('highlight');

    // Remove a classe 'active' de todos os links
    const allLinks = document.querySelectorAll('.sidebar ul li a');
    allLinks.forEach(link => {
        link.classList.remove('active');
    });

    // Adiciona a classe 'active' ao link correspondente
    const selectedLink = document.querySelector(`.sidebar ul li a[href="#${chartId}"]`);
    selectedLink.classList.add('active');
}

// Função para inicializar os gráficos
window.onload = function () {
    createChart('chart1', 'bar', getDataForChart('chart1'));
    createChart('chart2', 'bar', getDataForChart('chart2'));
    createChart('chart3', 'bar', getDataForChart('chart3'));
    createChart('chart4', 'bar', getDataForChart('chart4'));
    createChart('chart5', 'bar', getDataForChart('chart5'));
    createChart('chart6', 'bar', getDataForChart('chart6'));  // Criação do gráfico de Acesso Mensal
};
