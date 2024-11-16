{{--
@extends('layout')

@section('title', 'Menu - Sabores da Terra')

@section('content')
<section class="container my-5">
    <h2 class="text-center mb-4">Nosso Menu</h2>

    <!-- Filtros -->
    <div class="text-center mb-4">
        <button class="btn btn-outline-primary me-2" onclick="filterMenu('')">Todos</button>
        <button class="btn btn-outline-primary me-2" onclick="filterMenu('vegetariano')">Vegetariano</button>
        <button class="btn btn-outline-primary" onclick="filterMenu('prato-do-dia')">Prato do Dia</button>
    </div>

    <!-- Lista de Itens do Menu -->
    <div class="row" id="menu-items">
        <!-- Entradas -->
        <div class="col-md-4 menu-item vegetariano mb-4">
            <div class="card">
                <img src="{{ asset('images/salada-verde.jpg') }}" class="card-img-top" alt="Salada Verde">
                <div class="card-body">
                    <h5 class="card-title">Salada Verde</h5>
                    <p class="card-text">Folhas frescas com molho especial.</p>
                    <span class="badge bg-success"> 150,00 MZN</span>
                </div>
            </div>
        </div>

        <!-- Pratos Principais -->
        <div class="col-md-4 menu-item prato-do-dia mb-4">
            <div class="card">
                <img src="{{ asset('images/feijoada.jpg') }}" class="card-img-top" alt="Feijoada Completa">
                <div class="card-body">
                    <h5 class="card-title">Feijoada Completa</h5>
                    <p class="card-text">Prato do dia especial de quarta-feira.</p>
                    <span class="badge bg-success"> 250,00 MZN</span>
                </div>
            </div>
        </div>

        <!-- Sobremesas -->
        <div class="col-md-4 menu-item vegetariano mb-4">
            <div class="card">
                <img src="{{ asset('images/pudim.jpg') }}" class="card-img-top" alt="Pudim de Leite">
                <div class="card-body">
                    <h5 class="card-title">Pudim de Leite</h5>
                    <p class="card-text">Sobremesa clássica e irresistível.</p>
                    <span class="badge bg-success"> 100,00 MZN</span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection --}}



@extends('layout')

@section('title', 'Menu - Sabores da Terra')

@section('content')
<section class="container my-5">
    <h2 class="text-center mb-4">Nosso Menu</h2>

    <!-- Filtros de Categorias -->
    <div class="text-center mb-4">
        <button class="btn btn-outline-primary me-2" onclick="filterCategory('')">Todos</button>
        @foreach ($categorias as $categoria )
            <button class="btn btn-outline-primary me-2" onclick="filterCategory('{{ $categoria->nome }}')">{{ $categoria->nome }}</button>
        @endforeach
    </div>

    <div class="text-center mb-4">
        <button class="btn btn-outline-primary me-2" onclick="filterMenu('')">Todos</button>
        <button class="btn btn-outline-primary me-2" onclick="filterMenu('vegetariano')">Vegetariano</button>
        <button class="btn btn-outline-primary me-2" onclick="filterMenu('sem-gluten')">Sem Glúten</button>
    </div>
  <!-- Lista de Itens do Menu -->
  <div class="row" id="menu-items">
    <!-- Entradas -->
    @foreach ( $pratos as $prato)

        <div class="col-md-4 menu-item {{ $prato->menu->nome }}  {{ $prato->is_vegetariano  == 1 ? 'vegetariano' : ''}} sem-gluten mb-4">
            <div class="card">
                <img src="{{ asset('storage/' . $prato->imagem) }}" class="card-img-top" alt="{{ $prato->nome }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $prato->nome }}</h5>
                    <p class="card-text">{{ $prato->descricao }}</p>
                    <span class="badge bg-success"> {{ $prato->preco }}Mzn</span>

                    <!-- Sistema de Avaliação -->
                    <div class="rating mt-3">
                        <span class="star" data-rating="1">&#9733;</span>
                        <span class="star" data-rating="2">&#9733;</span>
                        <span class="star" data-rating="3">&#9733;</span>
                        <span class="star" data-rating="4">&#9733;</span>
                        <span class="star" data-rating="5">&#9733;</span>
                    </div>
                </div>
            </div>
        </div>

    @endforeach




</div>
    <!-- Lista de Itens do Menu -->
    <div class="row" id="menu-items">
        <!-- Entradas -->
        <div class="col-md-4 menu-item entradas vegetariano sem-gluten mb-4">
            <div class="card">
                <img src="{{ asset('images/pratos/salada-verde.jpg') }}" class="card-img-top" alt="Salada Verde">
                <div class="card-body">
                    <h5 class="card-title">Salada Verde</h5>
                    <p class="card-text">Folhas frescas com molho especial.</p>
                    <span class="badge bg-success"> 150,00Mzn</span>

                      <!-- Sistema de Avaliação -->
                      <div class="rating mt-3">
                        <span class="star" data-rating="1">&#9733;</span>
                        <span class="star" data-rating="2">&#9733;</span>
                        <span class="star" data-rating="3">&#9733;</span>
                        <span class="star" data-rating="4">&#9733;</span>
                        <span class="star" data-rating="5">&#9733;</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pratos Principais -->
        <div class="col-md-4 menu-item pratos-principais mb-4">
            <div class="card">
                <img src="{{ asset('images/feijoada.jpg') }}" class="card-img-top" alt="Feijoada Completa">
                <div class="card-body">
                    <h5 class="card-title">Feijoada Completa</h5>
                    <p class="card-text">Prato do dia especial de quarta-feira.</p>
                    <span class="badge bg-success">R$ 25,00</span>
                </div>
            </div>
        </div>

        <!-- Sobremesas -->
        <div class="col-md-4 menu-item sobremesas mb-4">
            <div class="card">
                <img src="{{ asset('images/pudim.jpg') }}" class="card-img-top" alt="Pudim de Leite">
                <div class="card-body">
                    <h5 class="card-title">Pudim de Leite</h5>
                    <p class="card-text">Sobremesa clássica e irresistível.</p>
                    <span class="badge bg-success">R$ 10,00</span>
                </div>
            </div>
        </div>

        <!-- Bebidas -->
        <div class="col-md-4 menu-item bebidas mb-4">
            <div class="card">
                <img src="{{ asset('images/suco-natural.jpg') }}" class="card-img-top" alt="Suco Natural">
                <div class="card-body">
                    <h5 class="card-title">Suco Natural</h5>
                    <p class="card-text">Feito com frutas frescas.</p>
                    <span class="badge bg-success">R$ 8,00</span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
