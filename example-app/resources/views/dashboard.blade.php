<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard de Atendimentos</title>
    <link rel="stylesheet" href="styles.css">
    @vite('resources/css/dashboard.css')
    @vite('resources/js/dashboard.js')
</head>
<body>
    <div class="back-button">
        
        <button onclick="history.back()" id="voltar">
    <span>&larr;</span> Voltar
</button>


    </div>

    <div class="sidebar">
        <h2>ㅤ</h2>
        <ul>
            <li><a href="#chart1-container" onclick="highlightChart('chart1-container')">Atendimentos Mensais</a></li>
            <br>
            <li><a href="#chart2-container" onclick="highlightChart('chart2-container')">Cursos</a></li>
            <br>
            <li><a href="#chart3-container" onclick="highlightChart('chart3-container')">Atendimentos em Aberto</a></li>
            <br>
            <li><a href="#chart4-container" onclick="highlightChart('chart4-container')">Atendimentos Concluídos</a></li>
            <br>
            <li><a href="#chart5-container" onclick="highlightChart('chart5-container')">Atendimentos Pendentes</a></li>
            <br>
            <li><a href="#chart6-container" onclick="highlightChart('chart6-container')">Acesso Mensal</a></li>
        </ul>
    </div>
    
    <div class="content">
        <div class="chart-container" id="chart1-container">
            <h2>Atendimentos Mensais</h2>
            <canvas id="chart1"></canvas>
            <button class="toggle-chart" onclick="toggleChart('chart1')">Alternar Gráfico</button>
        </div>
        
        <div class="chart-container" id="chart2-container">
            <h2>Cursos</h2>
            <canvas id="chart2"></canvas>
            <button class="toggle-chart" onclick="toggleChart('chart2')">Alternar Gráfico</button>
        </div>
        
        <div class="chart-container" id="chart3-container">
            <h2>Atendimentos em Aberto</h2>
            <canvas id="chart3"></canvas>
            <button class="toggle-chart" onclick="toggleChart('chart3')">Alternar Gráfico</button>
        </div>
        
        <div class="chart-container" id="chart4-container">
            <h2>Atendimentos Concluídos</h2>
            <canvas id="chart4"></canvas>
            <button class="toggle-chart" onclick="toggleChart('chart4')">Alternar Gráfico</button>
        </div>
        
        <div class="chart-container" id="chart5-container">
            <h2>Atendimentos Pendentes</h2>
            <canvas id="chart5"></canvas>
            <button class="toggle-chart" onclick="toggleChart('chart5')">Alternar Gráfico</button>
        </div>
        
        <div class="chart-container" id="chart6-container">
            <h2>Acesso Mensal</h2>
            <canvas id="chart6"></canvas>
            <button class="toggle-chart" onclick="toggleChart('chart6')">Alternar Gráfico</button>
        </div>
        
    </div>

    <div class="footer">
        <p>&copy; 2024 GestClass. Todos os direitos reservados.</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="script.js"></script>
</body>
</html>
