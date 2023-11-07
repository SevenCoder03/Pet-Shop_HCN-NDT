let amountElement = document.getElementById("amount");
let amount = amountElement.value;

let render = (amount) => {
    amountElement.value = amount;
};

let handlePlus = (event) => {
    event.preventDefault();
    amount++;
    render(amount);
};

let handleMinus = (event) => {
    event.preventDefault();
    if (amount > 1) {
        amount--;
    }
    render(amount);
};

amountElement.addEventListener("input", () => {
    amount = amountElement.value;
    amount = parseInt(amount);
    amount = isNaN(amount) || amount == 0 ? 1 : amount;
    render(amount);
});
