const quickViewButtons = document.querySelectorAll('[data-quick-view]');
const fullwidthCards = document.querySelectorAll('.fullwidth');

let toggle;
let toggleParent;
let fullwidth;

const openQuickView = (toggle, toggleParent, fullwidth) => {
    toggle.setAttribute('aria-expanded', 'true');
    toggleParent.classList.toggle('is-selected');
    fullwidth.classList.toggle('is-hidden');
    toggle.innerHTML = "Show less";
};

const closeQuickView = (toggle, toggleParent, fullwidth) => {
    toggle.setAttribute('aria-expanded', 'false');
    toggleParent.classList.toggle('is-selected');
    fullwidth.classList.toggle('is-hidden');
    toggle.innerHTML = "Show more"
};

quickViewButtons.forEach(quickView => {
    // Add appropriate ARIA attributes for "toggle" behaviour.
    fullwidth = quickView.parentElement.nextElementSibling;
    quickView.setAttribute('aria-expanded', 'false');
    quickView.setAttribute('aria-controls', fullwidth.id);

    quickView.addEventListener('click', (e) => {
        toggle = e.target;
        toggleParent = toggle.parentElement;
        fullwidth = toggleParent.nextElementSibling;

        // Open (or close) fullwidth card.
        if (toggle.getAttribute('aria-expanded') === 'false') {
            // Do we have another fullwidth card already open? If so, close it.
            fullwidthCards.forEach(fullwidthOpen => {
                if (!fullwidthOpen.classList.contains('is-hidden')) {
                    toggleParentOpen =
                        fullwidthOpen.previousElementSibling;
                    toggleOpen = toggleParentOpen.querySelector(
                        '[data-quick-view]'
                    );

                    closeQuickView(toggleOpen, toggleParentOpen, fullwidthOpen);
                }
            });

            openQuickView(toggle, toggleParent, fullwidth);

        } else {
            closeQuickView(toggle, toggleParent, fullwidth);
        }
    });
});

scrollTo = (element) => {
  window.scroll({
    behavior: 'smooth',
    left: 0,
    top: element.offsetTop
  });

}
