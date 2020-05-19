function solve() {
	let createTitleElement = document.getElementById('createTitle');
	let createContent = document.getElementById('createContent');

	let title = createTitleElement.value;
	let content = createContent.value;

	if(title && content) {
		let titleElement = document.createElement('h3');
		titleElement.textContent = title;

		let contentElement = document.createElement('p');
		contentElement.textContent = content;

		let articleElement = document.createElement('article');
		articleElement.appendChild(titleElement);
		articleElement.appendChild(contentElement);

		let articlesElement = document.getElementById('articles');
		articlesElement.appendChild(articleElement);

		createTitleElement.value = '';
		createContent.value = '';
	}
}