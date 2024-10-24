function calculatePrice() {
    const weight = parseInt(document.getElementById("weight").value);
    const service = document.getElementById("service").value;
    const type = document.querySelector('input[name="type"]:checked').value;
    const membership = document.querySelector('input[name="membership"]:checked').value;

    let pricePerKg;
    if (service === 'wash_dry') pricePerKg = 1000;
    else if (service === 'wash_iron') pricePerKg = 1200;
    else pricePerKg = 900;

    let totalPrice = pricePerKg * weight;

    if (type === 'express') {
        totalPrice += 200 * weight;
    }

    if (membership === 'member') {
        totalPrice *= 0.9;  // 10% discount
    }

    document.getElementById("result").textContent = `Total price: ${totalPrice}`;
}
