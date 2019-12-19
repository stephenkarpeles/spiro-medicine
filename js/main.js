// Animations
document.addEventListener('DOMContentLoaded', () => {
  /**
   * Add animations using IntersectionObserver when elements are scrolled to
   */
  function animateElements(entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('in-view');
      }
      // Comment out the lines below if you don't want the animation to run every time it scrolls into view (not just the first time)
      else {
        entry.target.classList.remove('in-view');
      }
    });
  }

  function initObserver() {
    const observer = new IntersectionObserver(animateElements);
    const items = document.querySelectorAll('.hero__content, .mailing-list-form-wrap, .contact-form-wrap');
    for(let i in items) {
      if(!items.hasOwnProperty(i)) {
        continue;
      }
      observer.observe(items[i]);
    }
  }

  if (window.IntersectionObserver) {
    initObserver();
  }

}, false);