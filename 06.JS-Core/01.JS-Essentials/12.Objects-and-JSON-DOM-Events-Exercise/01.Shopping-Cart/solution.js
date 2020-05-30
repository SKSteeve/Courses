function solve() {
    let divs = document.querySelectorAll('.product');

    let products = [];

    for (let i = 0; i < divs.length; i++) {
        let currentDiv = divs[i];
        let currName = currentDiv.children[1].innerHTML;
        let currPrice = currentDiv.children[2].innerHTML.split(' ')[1];
        let obj = {
            name: currName,
            price: currPrice
        };

        document.getElementsByTagName('button')[i].addEventListener('click', () => {
            products.push(obj);
            let textArea = document.getElementsByTagName('textarea')[0];
            textArea.value += `Added ${currName} for ${currPrice} to the cart.\n`;
        });
    }

    let buyButton = document.querySelector('#exercise > button');
    buyButton.addEventListener('click', () => {
        let totalPrice = 0;
        let arrElements = [];
        for (let j = 0; j < products.length; j++) {
            let price = products[j]['price'];
            totalPrice += +price;
            arrElements.push(products[j]['name']);
        }
        totalPrice = totalPrice.toFixed(2);
        let list = arrElements.filter(onlyUnique);

        let textAreaElement = document.getElementsByTagName('textarea')[0];
        textAreaElement.value += `You bought ${list} for ${totalPrice}.\n`;


        function onlyUnique(value, index, self) {
            return self.indexOf(value) === index;
        }
    });

}