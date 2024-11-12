    <!-- foto.blade.php -->
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="foto.css">
        @vite('resources/css/foto.css')
        <title>Perfil do Aluno - Escola Exemplo</title>
    </head>
    <body>
        <header class="header">
            <button class="back-button" onclick="window.history.back()">Voltar</button>
            <h1>Escola Exemplo</h1>
            <p>Perfil do Aluno</p>
        </header>

        <div class="container perfil-container">
            <div class="profile-picture">
                <img id="profile-img" src="{{ asset('storage/' . $aluno->foto) ?? 'assets/img/default-profile.png' }}" alt="Foto de Perfil do Aluno">
            </div>
            <div class="options">
                <button class="option-button" onclick="openCameraModal()">Abrir Câmera</button>
                <input type="file" id="file-input" accept="image/*" onchange="selectImage(event)" style="display: none;">
                <button class="option-button" onclick="document.getElementById('file-input').click()">Selecionar Fotos</button>
            </div>
            <form action="{{ route('salvar.foto', $aluno->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="foto" id="file-input-upload" accept="image/*" style="display: none;">
                <button type="submit" class="add-student-button">Adicionar aluno</button>
            </form>
        </div>

        <!-- Modal de Câmera -->
        <div id="camera-modal" class="modal">
            <div class="modal-content">
                <span class="close-button" onclick="closeCameraModal()">&times;</span>
                <video id="camera-video" autoplay></video>
                <button class="capture-button" onclick="captureImage()">Capturar</button>
            </div>
        </div>

        <script>
            let videoStream;

            function openCameraModal() {
                navigator.mediaDevices.getUserMedia({ video: true })
                    .then((stream) => {
                        videoStream = stream;
                        document.getElementById("camera-video").srcObject = stream;
                        document.getElementById("camera-modal").style.display = "flex";
                    })
                    .catch((error) => alert("Erro ao acessar a câmera: " + error));
            }

            function captureImage() {
                const video = document.getElementById("camera-video");
                const canvas = document.createElement("canvas");
                canvas.width = video.videoWidth;
                canvas.height = video.videoHeight;
                const context = canvas.getContext("2d");
                context.drawImage(video, 0, 0, canvas.width, canvas.height);
                document.getElementById("profile-img").src = canvas.toDataURL("image/png");
                closeCameraModal();
            }

            function closeCameraModal() {
                document.getElementById("camera-modal").style.display = "none";
                if (videoStream) {
                    videoStream.getTracks().forEach(track => track.stop());
                }
            }

            function selectImage(event) {
                const file = event.target.files[0];
                const reader = new FileReader();
                reader.onload = function () {
                    document.getElementById("profile-img").src = reader.result;
                };
                reader.readAsDataURL(file);
            }
        </script>
    </body>
    </html>
