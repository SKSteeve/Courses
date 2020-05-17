
function solve(fruit, weightInGrams, pricePerKg) {

    let kg = weightInGrams / 1000;
    let price = kg * pricePerKg;

    console.log(`I need $${price.toFixed(2)} to buy ${kg.toFixed(2)} kilograms ${fruit}.`);
}

//solve("orange", 1563, 2.35);