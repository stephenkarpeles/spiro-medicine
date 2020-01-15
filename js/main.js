document.addEventListener('DOMContentLoaded', () => {

  // Add class to contact menu link
  const jumpLink = document.querySelector('.jump-link a');
  jumpLink.setAttribute('class', 'scroll');


  // Smooth scroll to anchor links
  (function() {
    scrollTo();
  })();

  function scrollTo() {
    const links = document.querySelectorAll('.scroll');
    links.forEach(each => (each.onclick = scrollAnchors));
  }

  function scrollAnchors(e, respond = null) {
    const distanceToTop = el => Math.floor(el.getBoundingClientRect().top);
    e.preventDefault();
    var targetID = (respond) ? respond.getAttribute('href') : this.getAttribute('href');
    const targetAnchor = document.querySelector(targetID);
    if (!targetAnchor) return;
    const originalTop = distanceToTop(targetAnchor);
    window.scrollBy({ top: originalTop, left: 0, behavior: 'smooth' });
    const checkIfDone = setInterval(function() {
      const atBottom = window.innerHeight + window.pageYOffset >= document.body.offsetHeight - 2;
      if (distanceToTop(targetAnchor) === 0 || atBottom) {
        targetAnchor.tabIndex = '-1';
        targetAnchor.focus();
        window.history.pushState('', '', targetID);
        clearInterval(checkIfDone);
      }
    }, 100);
  }


  // Animations
  
  // Add animations using IntersectionObserver when elements are scrolled to  
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
    const items = document.querySelectorAll('.hero__content, .mailing-list-form-wrap, .contact-form-wrap, .testimonial-block, .link-box, .testimonial-panel__quote');
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

