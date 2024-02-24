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



document.querySelectorAll('li[role="option"]').forEach(item => {
    item.addEventListener('click', event => {
        document.getElementById('category_id').value = event.target.dataset.id;
    });
});



// Получаем ссылки на кнопки табов и соответствующие разделы
const resourcesButton = document.getElementById('resourcesButton');
const categoriesButton = document.getElementById('categoriesButton');
const resourcesSection = document.getElementById('resourcesSection');
const categoriesSection = document.getElementById('categoriesSection');

// Функция для отображения раздела ресурсов и скрытия раздела категорий
function showResourcesSection() {
    resourcesButton.classList.add('border-white');
    resourcesButton.classList.remove('border-transparent', 'hover:text-gray-600', 'hover:border-gray-300', 'dark:hover:text-gray-300');
    categoriesButton.classList.remove('border-white');
    categoriesButton.classList.add('border-transparent', 'hover:text-gray-600', 'hover:border-gray-300', 'dark:hover:text-gray-300');
    resourcesSection.style.display = 'block';
    categoriesSection.style.display = 'none';
}

// Функция для отображения раздела категорий и скрытия раздела ресурсов
function showCategoriesSection() {
    categoriesButton.classList.add('border-white');
    categoriesButton.classList.remove('border-transparent', 'hover:text-gray-600', 'hover:border-gray-300', 'dark:hover:text-gray-300');
    resourcesButton.classList.remove('border-white');
    resourcesButton.classList.add('border-transparent', 'hover:text-gray-600', 'hover:border-gray-300', 'dark:hover:text-gray-300');
    categoriesSection.style.display = 'block';
    resourcesSection.style.display = 'none';
}

// Назначаем обработчики событий на кнопки табов
resourcesButton.addEventListener('click', showResourcesSection);
categoriesButton.addEventListener('click', showCategoriesSection);

// По умолчанию показываем раздел ресурсов
showResourcesSection();

