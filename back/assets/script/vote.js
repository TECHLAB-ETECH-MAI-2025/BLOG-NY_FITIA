document.addEventListener('DOMContentLoaded', function () {
    const voteButtons = document.querySelectorAll('.vote-btn');

    voteButtons.forEach(button => {
        button.addEventListener('click', async function (e) {
            e.preventDefault();

            if (button.disabled) {
                const modal = new bootstrap.Modal(document.getElementById('loginModal'));
                modal.show();
                return;
            }

            const articleId = button.dataset.articleId;
            const voteType = button.dataset.voteType;

            try {
                const response = await fetch(`/article/${articleId}/vote/${voteType}`, {
                    method: 'POST',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    },
                    credentials: 'include'
                });

                const data = await response.json();

                if (response.status === 401) {
                    throw new Error('Unauthorized');
                }

                if (!response.ok) {
                    throw new Error(data.message || 'Error');
                }

                const voteContainer = button.closest('.vote-container');
                const likeBtn = voteContainer.querySelector('.vote-btn.like');
                const dislikeBtn = voteContainer.querySelector('.vote-btn.dislike');

                likeBtn.querySelector('.like-count').textContent = data.likes;
                dislikeBtn.querySelector('.dislike-count').textContent = data.dislikes;

                likeBtn.classList.toggle('active', data.userVote === 1);
                dislikeBtn.classList.toggle('active', data.userVote === -1);
            } catch (error) {
                console.error('Vote error:', error);
                if (error.message === 'Unauthorized') {
                    const modal = new bootstrap.Modal(document.getElementById('loginModal'));
                    modal.show();
                } else {
                    alert('Une erreur est survenue : ' + error.message);
                }
            }
        });
    });
});
