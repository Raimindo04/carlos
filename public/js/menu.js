/******/ (() => { // webpackBootstrap
/*!******************************!*\
  !*** ./resources/js/menu.js ***!
  \******************************/
// // Filtrar itens do menu
// function filterMenu(category) {
//     const items = document.querySelectorAll('.menu-item');
//     items.forEach(item => {
//         if (category === '' || item.classList.contains(category)) {
//             item.style.display = 'block';
//         } else {
//             item.style.display = 'none';
//         }
//     });
// }

// Filtrar itens do menu com base na categoria
// function filterCategory(category) {
//     const items = document.querySelectorAll('.menu-item');
//     items.forEach(item => {
//         if (category === '' || item.classList.contains(category)) {
//             item.style.display = 'block';
//         } else {
//             item.style.display = 'none';
//         }
//     });
// }

// resources/js/menu.js
window.filterCategory = function (category) {
  var items = document.querySelectorAll('.menu-item');
  items.forEach(function (item) {
    if (category === '' || item.classList.contains(category)) {
      item.style.display = 'block';
    } else {
      item.style.display = 'none';
    }
  });
};

// Filtrar itens do menu por categoria
window.filterMenu = function (category) {
  var items = document.querySelectorAll('.menu-item');
  items.forEach(function (item) {
    if (category === '' || item.classList.contains(category)) {
      item.style.display = 'block';
    } else {
      item.style.display = 'none';
    }
  });
};

// Sistema de avaliação de pratos
document.addEventListener('DOMContentLoaded', function () {
  var stars = document.querySelectorAll('.star');
  stars.forEach(function (star) {
    star.addEventListener('click', function () {
      var rating = this.getAttribute('data-rating');
      var card = this.closest('.card');
      var dishName = card.querySelector('.card-title').textContent;

      // Salvar a avaliação no localStorage
      saveRating(dishName, rating);

      // Atualizar a interface
      updateStars(card, rating);
    });

    // Atualizar estrelas com base na avaliação salva
    var card = star.closest('.card');
    var dishName = card.querySelector('.card-title').textContent;
    var savedRating = getRating(dishName);
    if (savedRating) {
      updateStars(card, savedRating);
    }
  });
});

// Salvar avaliação no localStorage
function saveRating(dishName, rating) {
  var ratings = JSON.parse(localStorage.getItem('ratings')) || {};
  ratings[dishName] = rating;
  localStorage.setItem('ratings', JSON.stringify(ratings));
}

// Obter avaliação salva no localStorage
function getRating(dishName) {
  var ratings = JSON.parse(localStorage.getItem('ratings')) || {};
  return ratings[dishName] || null;
}

// Atualizar as estrelas exibidas
function updateStars(card, rating) {
  var stars = card.querySelectorAll('.star');
  stars.forEach(function (star) {
    var starRating = star.getAttribute('data-rating');
    if (starRating <= rating) {
      star.style.color = 'gold';
    } else {
      star.style.color = 'gray';
    }
  });
}
/******/ })()
;