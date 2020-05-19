function solve() {
  let inputTextElement = document.getElementById('input');
  let outputElement = document.getElementById('output');

  let sentences = inputTextElement.textContent.split('.');

  for(let i = 0; i < sentences.length; i+=3) {
    let paragraph = document.createElement('p');
    paragraph.textContent = sentences[i]; 
    
    if(sentences.length > i + 1) {
      paragraph.textContent += '. ' + sentences[i + 1];
    }

    if(sentences.length > i + 2) {
      paragraph.textContent += '. ' + sentences[i + 2];
    }

    outputElement.appendChild(paragraph);
  }
}

