function solve() {
  let input = document.getElementById('arr').value;
  let array = JSON.parse(input);

  let resultElement = document.getElementById('result');
  resultElement.textContent = '';

  let newArr = [];
  for (let i = 0; i < array.length; i+=2) {
      newArr.push(array[i]);
  }

  let resultText = newArr.join(' x ');
  console.log(typeof resultText);
  resultElement.textContent = resultText;
}