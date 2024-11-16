@extends('layout')

@section('title', 'Home - Sabores da Terra')

@section('content')

<!-- Banner Dinâmico -->

<div id="promoBanner" class="alert alert-info promo-banner alert-dismissible fade show" role="alert">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-10">
                <strong>Promoção Especial!</strong> Aproveite 20% de desconto em todos os pratos durante todo o mês! Não perca essa oportunidade.
            </div>
            <div class="col-md-2 text-end">
                <button type="button" class="btn-close banner-button" aria-label="Close" onclick="closeBanner()"></button>
            </div>
        </div>
    </div>
</div>

<!-- Conteúdo da página -->
<div class="container mt-5">
    <h1>Bem-vindo ao Nosso Restaurante!</h1>
    <p>Aqui você encontra pratos deliciosos preparados com os melhores ingredientes. Aproveite nossa promoção e venha nos visitar!</p>
</div>

    <section class="position-relative text-center">
        <h2>Bem-vindo ao Sabores da Terra</h2>
        <p>Desfrute do melhor da culinária regional com um toque caseiro.</p>
        <img src="{{ asset('images/placeholder1.jpg') }}" class="img-fluid w-100" alt="Foto do restaurante">
        <button
            class="btn btn-primary position-absolute top-50 start-50 translate-middle"
            onclick="window.location.href='{{ url('/menu') }}'">
            Ver Menu
        </button>
    </section>

    <section id="promocoes" class="text-center mt-5">
        <h3>Promoções da Semana</h3>
        <div class="alert alert-success">Carregando promoções...</div>
    </section>

     <!-- Seção Sobre Nós -->
     <div class="section">
        <h2 class="section-title">Sobre Nós</h2>
        <p class="section-content">
            Somos um restaurante dedicado a oferecer uma experiência gastronômica única e inesquecível.
            Nosso objetivo é proporcionar momentos de prazer, qualidade e tradição aos nossos clientes,
            com um atendimento de excelência e pratos preparados com ingredientes frescos e selecionados.
        </p>
    </div>

    <!-- Seção Missão -->
    <div class="section bg-light">
        <h2 class="section-title">Nossa Missão</h2>
        <p class="section-content">
            A nossa missão é proporcionar aos nossos clientes uma experiência gastronômica autêntica,
            onde sabor, qualidade e bem-estar se encontram. Trabalhamos constantemente para criar
            pratos inovadores e promover um ambiente acolhedor e familiar.
        </p>
    </div>

    <!-- Seção Depoimentos -->
    <div class="section">
        <h2 class="section-title">Depoimentos</h2>
        <div class="row">
            <!-- Depoimento 1 -->
            <div class="col-md-4 mb-4">
                <div class="testimonial-card">
                    <p>"A comida é maravilhosa, e o atendimento é impecável. Recomendo para todos!"</p>
                    <footer>- João da Silva</footer>
                </div>
            </div>

            <!-- Depoimento 2 -->
            <div class="col-md-4 mb-4">
                <div class="testimonial-card">
                    <p>"Uma experiência incrível! O ambiente é acolhedor e a comida, sem palavras."</p>
                    <footer>- Maria Ndapossa</footer>
                </div>
            </div>

            <!-- Depoimento 3 -->
            <div class="col-md-4 mb-4">
                <div class="testimonial-card">
                    <p>"Simplesmente adorei o local! Ótimo lugar para um jantar com amigos ou familiares."</p>
                    <footer>- Carlos Salomao</footer>
                </div>
            </div>
        </div>
    </div>

@endsection
<!-- Script para fechar o banner -->
<script>
    // Função para fechar o banner
    function closeBanner() {
        document.getElementById('promoBanner').style.display = 'none';
    }

    // Função para alterar a mensagem dinamicamente (exemplo)
    function changeBannerMessage(message) {
        document.querySelector('#promoBanner .alert-text').innerHTML = message;
    }

    // Exemplo de uso: alterar a mensagem do banner após 5 segundos
    setTimeout(() => {
        changeBannerMessage('Super Evento: Jantar Especial com Música ao Vivo neste sábado! Não perca!');
    }, 5000);
</script>
