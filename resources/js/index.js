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


var button = document.querySelector('button[aria-haspopup="listbox"]');
var list = document.querySelector('ul[role="listbox"]');

button.addEventListener('click', function () {
    var isExpanded = this.getAttribute('aria-expanded') === 'true';
    this.setAttribute('aria-expanded', !isExpanded);
    list.style.display = isExpanded ? 'none' : 'block';
});

var listItems = list.querySelectorAll('li');
listItems.forEach(function (listItem) {
    listItem.addEventListener('click', function () {
        var selectedText = this.querySelector('span').textContent;
        button.querySelector('.truncate').textContent = selectedText;
        button.setAttribute('aria-expanded', false);
        list.style.display = 'none';
    });
});

document.querySelectorAll('li').forEach(function (li) {
    li.addEventListener('click', function () {
        document.querySelector('button span span').textContent = this.textContent;
        document.querySelector('ul').classList.add('hidden');
    });
});


document.querySelectorAll('li[role="option"]').forEach(item => {
    item.addEventListener('click', event => {
        document.getElementById('category_id').value = event.target.dataset.id;
    });
});
