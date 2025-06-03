import { Controller } from '@hotwired/stimulus';

export default class extends Controller {
    static targets = ['likeBtn', 'dislikeBtn'];

    vote(event) {
        const button = event.currentTarget;
        const articleId = button.dataset.articleId;
        const voteType = button.dataset.voteType;

        fetch(`/article/${articleId}/vote/${voteType}`, {
            method: 'POST',
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'Accept': 'application/json'
            }
        })
        .then(response => response.json())
        .then(data => {
            // Mise à jour des compteurs
            document.querySelectorAll('.count').forEach(span => {
                span.textContent = span.parentElement.classList.contains('like') 
                    ? data.likes 
                    : data.dislikes;
            });

            // Mise à jour des styles
            document.querySelectorAll('.vote-btn').forEach(btn => {
                btn.classList.remove('active');
            });
            if (data.userVote === 1) {
                document.querySelector('.vote-btn.like').classList.add('active');
            } else if (data.userVote === -1) {
                document.querySelector('.vote-btn.dislike').classList.add('active');
            }
        })
        .catch(error => console.error('Error:', error));
    }
}