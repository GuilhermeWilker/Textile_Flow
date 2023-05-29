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
            <h3>R$ 1200,00 +</h3>
        </div>

        <div class="income_display">
            <h6 class="income_title-loss">Gastos</h6>
            <h3>R$ 200,00 -</h3>
        </div>

    </section>

    <form action="" class="income_form">
        <legend>Adicionar</legend>

        <div class="income_form-group">
            <input type="number" name="item-price" class="item_form-price" placeholder="R$ 15">
            <input type="text" name="item-name" class="item_form-name" placeholder="Fios bege">
        </div>


        <button type="submit">Enviar</button>
    </form>

    <section class="income_list">
        <h3>Histórico de transações</h3>

        <div class="income_item">
            <p class="income_item-name">
                Fios vermelhos
            </p>
            <span class="income_item-qnt">5 qnt</span>

            <p class="income_item-price">R$ 32,00 -</p>
        </div>

        <div class="income_item">
            <p class="income_item-name">
                Fios vermelhos
            </p>
            <span class="income_item-qnt">5 qnt</span>

            <p class="income_item-price">R$ 32,00 -</p>
        </div>

        <div class="income_item">
            <p class="income_item-name">
                Fios vermelhos
            </p>
            <span class="income_item-qnt">5 qnt</span>

            <p class="income_item-price">R$ 32,00 -</p>
        </div>

        <div class="income_item">
            <p class="income_item-name">
                Fios vermelhos
            </p>
            <span class="income_item-qnt">5 qnt</span>

            <p class="income_item-price">R$ 32,00 -</p>
        </div>

        <div class="income_item">
            <p class="income_item-name">
                Fios vermelhos
            </p>
            <span class="income_item-qnt">5 qnt</span>

            <p class="income_item-price">R$ 32,00 -</p>
        </div>

        <div class="income_item">
            <p class="income_item-name">
                Fios vermelhos
            </p>
            <span class="income_item-qnt">5 qnt</span>

            <p class="income_item-price">R$ 32,00 -</p>
        </div>

        <div class="income_item">
            <p class="income_item-name">
                Fios vermelhos
            </p>
            <span class="income_item-qnt">5 qnt</span>

            <p class="income_item-price">R$ 32,00 -</p>
        </div>
    </section>
@endsection
