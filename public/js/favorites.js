document.addEventListener('DOMContentLoaded', () => {
    const favoriteButtons = document.querySelectorAll('.favorite-btn');

    favoriteButtons.forEach(button => {
        button.addEventListener('click', () => {
            const tournoiId = button.getAttribute('data-id');
            const isFavorited = button.classList.contains('favorited');
            const url = isFavorited 
                ? `/favorites/remove/${tournoiId}` 
                : `/favorites/add/${tournoiId}`;

            fetch(url, {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                },
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        button.classList.toggle('favorited');
                    }
                });
        });
    });
});