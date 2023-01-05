

document.querySelectorAll('.carriculam__button').forEach(button => {
    button.addEventListener('click', () => {


        button.classList.toggle('carriculam__button--active');

    });
});