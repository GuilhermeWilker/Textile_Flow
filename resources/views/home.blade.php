@extends('master')

@section('content')
    <section class="actions_container">

        <div class="action_box clock">
            <h2 class="hr">12</h2> <span>:</span>
            <h2 class="min">53</h2> <span>:</span>
            <h2 class="seg">25</h2>

        </div>

        <div class="action_box link_button">
            <h2>Gerar relatórios</h2>
            <div class="img_box">
                <img src="/images/report.png" alt="income">
            </div>
        </div>

        <a href="{{ route('income') }}" class="action_box link_button">
            <h2>Checar ganhos e despesas</h2>
            <div class="img_box">
                <img src="/images/income_pic.png" alt="income">
            </div>
        </a>

    </section>

    <section class="stock_display">

        <header class="stock_header">
            <h2 class="title">Estoque de itens</h2>
            <a href="{{ route('stock') }}">Ver estoque completo</a>
        </header>


        {{-- <article class="actions_container">
            @foreach ($items as $item)
                <div class="action_box-item stock">
                    <p>
                        {{ $item->itemName }}
                    </p>

                    <span class="income_item-qnt">
                        {{ $item->itemQnt }} qnt
                    </span>
                </div>
            @endforeach
        </article> --}}


    </section>
@endsection

@section('script')
    <script src="/js/script.js" defer></script>
@endsection
