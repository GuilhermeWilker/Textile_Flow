@extends('master')

@section('content')
    <section class="actions_container">
        <div class="action_box link_button">
            <h2>Checar ganhos e despesas</h2>
            <div class="img_box">
                <img src="/images/income_pic.png" alt="income">
            </div>
        </div>
    </section>

    <section class="income_container">
        <div class="income_display">
            <h6 class="income_title-gain">Ganhos</h6>
            <h3>R$ {{ $totalGains }}</h3>
        </div>

        <div class="income_display">
            <h6 class="income_title-loss">Gastos</h6>
            <h3>R$ {{ $totalExpenses }}</h3>
        </div>
    </section>


    @if (session()->has('success'))
        <p class="alert_success">
            {{ session()->get('success') }}
        </p>
    @elseif(session()->has('error'))
        <p class="alert_error">
            {{ session()->get('error') }}
        </p>
    @endif

    <form action="{{ route('income.store') }}" method="post" class="income_form">
        @csrf

        <legend>Adicionar</legend>

        <div class="income_form-group">
            <div>
                <small><label for="itemQnt">Quantidade</label></small>
                <input type="number" name="itemQnt" class="item_form-price" placeholder="3 qnt">
            </div>

            <div>
                <small><label for="itemName">Nome produto</label></small>
                <input type="text" name="itemName" class="item_form-name" placeholder="Fios bege">
            </div>

            <div>
                <small><label for="itemPrice">Preço</label></small>
                <input type="number" name="itemPrice" class="item_form-price" placeholder="R$ 15">
            </div>
        </div>


        <div class="income_form-group">

            <select name="itemType" class="item_form-type">
                <option value="none">Selecione o tipo de transação</option>
                <option value="expense">Despesa</option>
                <option value="gain">Ganho</option>
            </select>


            <div>
                <button type="submit">Enviar</button>
            </div>

        </div>


    </form>

    <section class="income_list">
        <h3>Histórico de transações</h3>


        <ul>
            @foreach ($incomes as $income)
                <li class="income_item">
                    <p class="income_item-name">
                        {{ $income->itemName }}
                    </p>
                    <span class="income_item-qnt">
                        {{ $income->itemQnt }} qnt
                    </span>

                    <p class="income_item-price">
                        R$ {{ $income->itemPrice }}
                    </p>
                </li>
            @endforeach
        </ul>


    </section>
@endsection
