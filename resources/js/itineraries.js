document.addEventListener('DOMContentLoaded', function() {
    const boardLinks = document.querySelectorAll('.board-link');

    boardLinks.forEach(el => {
        el.addEventListener('click', function() {
            const id = this.id;
            const currentEl = document.querySelector('.board-link.active');
            currentEl.classList.remove('active');
            document.querySelector(`div[data-id="${currentEl.id}"]`).classList.add('d-none');
            if (!this.classList.contains('active')) {
                this.classList.add('active');
            }
            const content = document.querySelector(`div[data-id="${id}"]`);
            if (content.classList.contains('d-none')) {
                content.classList.remove('d-none');
            }
        });
    });
});