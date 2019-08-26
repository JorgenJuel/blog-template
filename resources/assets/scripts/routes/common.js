export default {
  init() {
    // JavaScript to be fired on all pages
    const closer = document.querySelector('.mobile-menu-closer');
    const opener = document.querySelector('.mobile-menu-opener');
    if(closer) {
        closer.addEventListener('click', (event) => {
            event.preventDefault();
            document.body.classList.remove('open-nav');
        });
    }
    if(opener) {
        opener.addEventListener('click', (event) => {
            event.preventDefault();
            document.body.classList.add('open-nav');
        });
    }
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
