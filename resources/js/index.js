function openModal() {
    const modal = document.getElementById('modal');
    modal.classList.remove('hidden');
}

function closeModal() {
    const modal = document.getElementById('modal');
    modal.classList.add('hidden');
}

document.getElementById('addResourceModal').addEventListener('click', openModal);
document.getElementById('closeModalButton').addEventListener('click', closeModal);


// Получаем кнопку и список
var button = document.querySelector('button[aria-haspopup="listbox"]');
var list = document.querySelector('ul[role="listbox"]');

// Добавляем обработчик событий на кнопку для открытия и закрытия списка
button.addEventListener('click', function () {
    var isExpanded = this.getAttribute('aria-expanded') === 'true';
    this.setAttribute('aria-expanded', !isExpanded);
    list.style.display = isExpanded ? 'none' : 'block';
});

// Добавляем обработчики событий на элементы списка для выбора элемента и закрытия списка
var listItems = list.querySelectorAll('li');
listItems.forEach(function (listItem) {
    listItem.addEventListener('click', function () {
        var selectedText = this.querySelector('span').textContent;
        button.querySelector('.truncate').textContent = selectedText;
        button.setAttribute('aria-expanded', false);
        list.style.display = 'none';
    });
});
