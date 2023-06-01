document.querySelector(".income_form").addEventListener("submit", function () {
    // Obtém o valor da quantidade e do preço
    var quantity = parseFloat(document.getElementById("itemQnt").value);
    var price = parseFloat(document.getElementById("itemPrice").value);

    // Calcula o resultado
    var total = quantity * price;

    // Atualiza o valor do campo de preço com o resultado
    document.getElementById("itemPrice").value = total;
});
