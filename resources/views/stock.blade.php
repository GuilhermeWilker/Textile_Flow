@extends('master')

@section('content')
    <header class="stock_header">
        <h2 class="title">Estoque de itens</h2>
        <a href="{{ route('income') }}">Adicionar novo item</a>
    </header>

    <form action="" class="form_stock">
        <input type="search" name="searchBar" class="search_bar" placeholder="Pesquise seu item aqui" />
        <button type="submit">Pesquisar</button>
    </form>

    <article class="actions_container">
        @foreach ($items as $item)
            <div class="action_box-item">
                <p>
                    {{ $item->itemName }}
                </p>

                <span class="income_item-qnt">
                    {{ $item->itemQnt }} qnt
                </span>
            </div>
        @endforeach


    </article>


    </section>
@endsection
