function solve() {
    document.querySelector('#container button').addEventListener('click', function (e) {
        e.preventDefault();

        let inputs = document.getElementsByTagName('input');
        let nameEl = inputs[0];
        let ageEl = inputs[1];
        let kindEl = inputs[2];
        let currentOwnerEl = inputs[3];

        let name = nameEl.value;
        let age = ageEl.value;
        let kind = kindEl.value;
        let owner = currentOwnerEl.value;

        if(!validateInputs(name, age, kind, owner)) {
            return;
        }
        addListItem(name, age, kind, owner);
        clearInputs(nameEl, ageEl, kindEl, currentOwnerEl);
    });

    function validateInputs(name, age, kind, owner) {
        if(!isNaN(age) && age !== '' && name !== '' && kind !== '' && owner !== '') {
            return true;
        }
        return false;
    }
    
    function addListItem(name, age, kind, owner) {
        let ulAdoptionSectionEl = document.querySelector('#adoption ul');

        let liElement = document.createElement('li');
        let pElement = document.createElement('p');
        let spanElement = document.createElement('span');
        let buttonElement = document.createElement('button');

        pElement.innerHTML = `<strong>${name}</strong> is a <strong>${age}</strong> year old <strong>${kind}</strong>`;
        spanElement.textContent = `Owner: ${owner}`;
        buttonElement.textContent = 'Contact with owner';

        buttonElement.addEventListener('click', contactWithOwner);
        
        liElement.appendChild(pElement);
        liElement.appendChild(spanElement);
        liElement.appendChild(buttonElement);
        ulAdoptionSectionEl.appendChild(liElement);
    }

    function clearInputs(nameEl, ageEl, kindEl, currentOwnerEl) {
        nameEl.value = '';
        ageEl.value = '';
        kindEl.value = '';
        currentOwnerEl.value = '';
    }
    
    function contactWithOwner(e) {
        let buttonElement = e.target;
        let liElement = buttonElement.parentElement;

        let divElement = document.createElement('div');
        let inputElement = document.createElement('input');

        inputElement.setAttribute('placeholder', 'Enter your names');
        buttonElement.textContent = "Yes! I take it!";
        buttonElement.removeEventListener('click', contactWithOwner);
        buttonElement.addEventListener('click', moveToAdoptedSection);
        buttonElement.remove();

        divElement.appendChild(inputElement);
        divElement.appendChild(buttonElement);
        liElement.appendChild(divElement);
    }

    function moveToAdoptedSection(e) {
        let inputEl = e.target.parentElement.children[0];
        let newOwner = inputEl.value;
        if(newOwner === '' || newOwner === undefined) {
            return;
        }

        let listItemEl = e.target.parentElement.parentElement;
        let spanEl = listItemEl.children[1];
        let buttonEl = document.createElement('button');
        let ulAdoptedSection = document.querySelector('#adopted ul');

        listItemEl.children[2].remove();
        listItemEl.remove();

        spanEl.textContent = `New Owner: ${newOwner}`;
        buttonEl.textContent = "Checked";

        buttonEl.addEventListener('click', deleteListItem);
        listItemEl.appendChild(buttonEl);
        ulAdoptedSection.appendChild(listItemEl);
    }
    
    function deleteListItem(e) {
        let currentList = e.target.parentElement;
        currentList.remove();
    }
}

