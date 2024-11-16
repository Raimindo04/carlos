@extends('layout')
  <!-- Link para o CSS do Leaflet -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

  <style>
      #map {
          height: 400px;
          width: 100%;
      }
  </style>
@section('title', 'Menu - Sabores da Terra')

@section('content')
<section class="container my-5">
    <div class="container mt-5">
        <h1 class="mb-4">Contato</h1>

        <!-- Exibição de mensagem de sucesso -->
        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <!-- Formulário de Contato -->
        <form action="{{ route('contacto.send') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="assunto" class="form-label">Assunto</label>
                <input type="text" class="form-control" id="assunto" name="assunto" required>
            </div>
            <div class="mb-3">
                <label for="mensagem" class="form-label">Mensagem</label>
                <textarea class="form-control" id="mensagem" name="mensagem" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
        </form>

        <!-- Mapa do OpenStreetMap -->
        <h2 class="mt-5">Nosso Local</h2>
        <div id="map"></div>
    </div>

    <!-- Script do Leaflet -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        // Criar o mapa e definir a posição inicial (substitua pelas coordenadas do restaurante)
        var map = L.map('map').setView([-19.8436100, 34.8388900], 15); // Exemplo: São Paulo (lat, lng)

        // Adicionar o OpenStreetMap como camada do mapa
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Adicionar um marcador para o local do restaurante
        L.marker([-19.8436100, 34.8388900]).addTo(map)
            .bindPopup("<b>Restaurante Local</b><br>Endereço do Restaurante.")
            .openPopup();
    </script>

</section>
@endsection

   <!-- Google Maps API -->
   <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_MAPS_API_KEY&callback=initMap" async defer></script>
   <script>
       function initMap() {
           const restaurantLocation = { lat: -19.830944, lng: 34.8604316 }; // Substitua com a latitude e longitude do restaurante
           const map = new google.maps.Map(document.getElementById("map"), {
               zoom: 15,
               center: restaurantLocation,
           });
           const marker = new google.maps.Marker({
               position: restaurantLocation,
               map: map,
               title: "Restaurante Local",
           });
       }
   </script>
