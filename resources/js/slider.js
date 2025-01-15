import newBooks from './assets'; // Import newBooks from assets.js

document.addEventListener('DOMContentLoaded', () => {
    const slider = document.querySelector('.slider');

    newBooks.forEach(book => {
        const slide = document.createElement('div');
        slide.classList.add('slide');

        const img = document.createElement('img');
        img.src = book.url;
        img.alt = book.name;

        const h3 = document.createElement('h3');
        h3.textContent = book.name;

        const p = document.createElement('p');
        p.textContent = book.author; // Corrected typo from aothor to author

        slide.appendChild(img);
        slide.appendChild(h3);
        slide.appendChild(p);

        slider.appendChild(slide);
    });
});
