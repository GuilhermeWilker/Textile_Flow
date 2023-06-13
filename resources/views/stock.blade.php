@extends('master')

@section('content')
    <header class="stock_header">
        <h2 class="title">Estoque de itens</h2>
        <a href="{{ route('income') }}">Adicionar novo item</a>
    </header>

    <form action="{{ route('items.search') }}" class="form_stock">
        <input type="search" name="searchBar" class="search_bar" placeholder="Pesquise seu item aqui" />
        <button type="submit">Pesquisar</button>
    </form>


    @if (session()->has('error'))
        <p class="alert_error">
            {{ session()->get('error') }}
        </p>
    @endif

    <article class="stock_container">
        @foreach ($items as $item)
            <div class="action_box-item stock">
                <p>
                    {{ $item->itemName }}
                </p>

                <span class="income_item-qnt">
                    {{ $item->itemQnt }} qnt
                </span>

                <div class="stock_button-container">
                    <form action="{{ route('stock.update', $item->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="itemId" value="{{ $item->id }}">
                        <button type="submit" name="action" value="decrease" class="stock_button">
                            &minus;
                        </button>
                    </form>

                    <form action="{{ route('stock.update', $item->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="itemId" value="{{ $item->id }}">
                        <button type="submit" name="action" value="increase" class="stock_button">
                            &plus;
                        </button>
                    </form>
                </div>
            </div>
        @endforeach


    </article>


    </section>
@endsection
