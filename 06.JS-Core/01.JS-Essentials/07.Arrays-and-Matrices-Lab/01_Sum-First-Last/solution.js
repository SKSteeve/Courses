function solve() {
    let inputText = document.getElementById('arr').value;
    let resultElement = document.getElementById('result');
    resultElement.textContent = '';

    let arr = JSON.parse(inputText);

    for (let i = 0; i < arr.length; i++) {
        let paragraph = document.createElement('p');
        paragraph.textContent = `${i} -> ${+arr[i] * arr.length}`;
        resultElement.appendChild(paragraph);
    }
}