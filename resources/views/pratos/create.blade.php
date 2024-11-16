@extends('layout')

@section('title', 'Menu - Sabores da Terra')

@section('content')
<section class="container my-5">

    <h1>Registrar Novo Prato</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('pratos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="menu_id" class="form-label">Categoria</label>
            <select class="form-select" id="menu_id" name="menu_id" required>
                <option value="" disabled selected>Selecione</option>
                @foreach ( $menus as $categoria )
                <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
              @endforeach

            </select>
        </div>
        <div class="mb-3">
            <label for="nome" class="form-label">Nome do Prato</label>
            <input type="text" class="form-control @error('nome') is-invalid @enderror" id="nome" name="nome" required>

        @error('nome')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        </div>


        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea class="form-control @error('descricao') is-invalid @enderror" id="descricao" name="descricao" rows="3" required></textarea>

            @error('descricao')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        </div>
        <div class="mb-3">
            <label for="preco" class="form-label">Preço</label>
            <input type="number" step="0.01" class="form-control @error('preco') is-invalid @enderror" id="preco" name="preco" required>

            @error('preco')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        </div>
        <div class="mb-3">
            <label for="imagem" class="form-label">Imagem</label>
            <input type="file" class="form-control @error('imagem') is-invalid @enderror" id="imagem" name="imagem" accept="image/*">

            @error('imagem')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input @error('is_prato_do_dia') is-invalid @enderror" id="prato_do_dia" name="is_prato_do_dia" value="1">
            <label for="prato_do_dia" class="form-check-label">Prato do Dia</label>

            @error('is_prato_do_dia')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input @error('is_vegetariano') is-invalid @enderror" id="vegetariano" name="is_vegetariano" value="1">
            <label for="vegetariano" class="form-check-label">Vegetariano</label>

            @error('is_vegetariano')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>

</section>
@endsection
