import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    const $stories = document.getElementById('stories');

    if (!$stories) {
        return;
    }

    window.Echo.channel('stories')
        .listen('.stories', (e) => {
            const container = document.createElement('template');
            container.innerHTML = e.html.trim();

            const $story = container.content.childNodes.length > 1
                ? container.content.childNodes
                : container.content.childNodes[0];

            $stories.prepend($story);
        });
});



