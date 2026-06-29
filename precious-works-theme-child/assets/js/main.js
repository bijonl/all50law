console.log('HELLO JS HELLO JS'); 

const accordionBtns = document.querySelectorAll(".accordion");

document.addEventListener("DOMContentLoaded", () => {
  console.log('PARENT'); 
  const accordions = document.querySelectorAll(".accordion");
  console.log(accordions); 

  // click handler
  accordions.forEach((accordion) => {
    accordion.addEventListener("click", function (e) {
      e.preventDefault(); 
      console.log(this); 
      const targetId = this.getAttribute("data-accordion-id");
      console.log(targetId); 
      toggleAccordion(targetId);
      console.targetId; 
    });
  });
});

// function to open/close by id
// function to open/close by id
function toggleAccordion(id) {
  const content = document.getElementById(id);
  const button = document.querySelector(`[data-accordion-id="${id}"]`);

  if (!content || !button) return;

  const isOpen = button.classList.contains("is-open");

  if (isOpen) {
    // Closing
    button.classList.remove("is-open");
    button.classList.add("is-closed");

    content.style.maxHeight = content.scrollHeight + "px"; // set to current height
    requestAnimationFrame(() => {
      content.style.maxHeight = null; // let CSS transition it down
    });
  } else {
    // Opening
    button.classList.remove("is-closed");
    button.classList.add("is-open");

    content.style.maxHeight = content.scrollHeight + "px";
  }
}

const menuToggle = document.getElementById('menu__toggle');

if (menuToggle) {
    const navigation = menuToggle.parentElement.querySelector('.main-navigation');

    menuToggle.addEventListener('change', () => {
        menuToggle.classList.toggle('button-checked', menuToggle.checked);
    });
}

document.addEventListener("scroll", function () {
  const header = document.querySelector("header.site-header"); // adjust selector if needed
  if (!header) return;

  if (window.scrollY > 0) {
    header.classList.add("is-scrolling");
  } else {
    header.classList.remove("is-scrolling");
  }
});

document.querySelectorAll('.submenu-toggle').forEach(button => {
    button.addEventListener('click', () => {

        const submenu = button.nextElementSibling;
        const menuItem = button.closest('.menu-item-has-children');
        const expanded = button.getAttribute('aria-expanded') === 'true';

        button.setAttribute('aria-expanded', !expanded);

        submenu.classList.toggle('is-open');
        menuItem.classList.toggle('open-active');
    });
});


// Recent Posts Slider
document.querySelectorAll('.recent-posts-glide').forEach(function(slider) {

    const perView = 3;
    const autoplay = false;
    const peek = {
        before: 0,
        after: 100
    };

    new Glide(slider, {
        startAt: 0,
        perView: perView,
        perTouch: 3,
        autoplay: autoplay,
        gap: 20,
        peek: peek, 
         breakpoints: {
        769: {
            perView: 2,
            peek: 0
        },
        568: {
                perView: 1,
                peek: 0
            }
        }
    }).mount();

});


// Reviews Slider
document.querySelectorAll('.reviews-glide').forEach(function(slider) {

    const perView = 3;
    const autoplay = false;
    const peek = {
        before: 0,
        after: 100
    };

    new Glide(slider, {
        startAt: 0,
        perView: perView,
        perTouch: 1,
        autoplay: autoplay,
        gap: 20,
        peek: peek, 
        breakpoints: {
            768: {
                perView: 2,
                peek: 0
            },
            568: {
                perView: 1,
                peek: 0
            }
        }
    }).mount();

});

// Results Slider
document.querySelectorAll('.results-glide').forEach(function(slider) {

    const perView = parseInt(slider.dataset.perView) || 2;    
    const autoplay = slider.dataset.autoplay || false;
    const peek = {
        before: 100,
        after: 100
    };

    new Glide(slider, {
        type: 'carousel', 
        focusAt: 'center', 
        perView: perView,
        perTouch: 1,
        autoplay: autoplay,
        gap: 20,
        peek: peek, 
        breakpoints: {
            768: {
                perView: 2,
                peek: 0
            },
            568: {
                perView: 1,
                peek: 0
            }
        }
    }).mount();

});

// Results Slider (attorney page)
document.querySelectorAll('.single-attorney-post-section .results-glide').forEach(function(slider) {

    const perView = 1;    
    const autoplay = slider.dataset.autoplay || false;

    new Glide(slider, {
        type: 'slider', 
        perView: 2,
        startAt: 0,
        perTouch: 1,
        autoplay: autoplay,
        gap: 0,
        breakpoints: {
            768: {
                perView: 2,
                peek: 0
            },
            568: {
                perView: 1,
                peek: 0
            }
        }
    }).mount();

});

// Attorney Slider
document.querySelectorAll('.attorneys-glide').forEach(function(slider) {

    const perView = parseInt(slider.dataset.perView) || 3;    
    const autoplay = slider.dataset.autoplay || false;
    const peek = {
        before: 100,
        after: 100
    };

    new Glide(slider, {
        type: 'slider', 
        startAt: 0,
        perView: perView,
        perTouch: 1,
        autoplay: autoplay,
        gap: 20,
        peek: peek, 
        breakpoints: {
            768: {
                perView: 2,
                peek: 0
            },
            568: {
                perView: 1,
                peek: 0
            }
        }
    }).mount();

});

// Link Slider
document.querySelectorAll('.link-glide').forEach(function(slider) {
    new Glide(slider, {
        startAt: 0,
        perView: 1,
        perTouch: 1,
        autoplay: false,
        gap: 0,
    }).mount();

});



// Image Slider
document.querySelectorAll('.image-glide').forEach(function(slider) {

    const perView = parseInt(slider.dataset.perView) || 3;    
    const autoplay = slider.dataset.autoplay || false;
    const peek = {
        before: 0,
        after: 0
    };

    new Glide(slider, {
        startAt: 0,
        perView: perView,
        perTouch: 1,
        autoplay: autoplay,
        gap: 20,
        peek: peek
    }).mount();

});


// Videos Slider
document.querySelectorAll('.videos-glide').forEach(function(slider) {

    const perView = parseInt(slider.dataset.perView) || 3;    
    const autoplay = false;
    const peek = {
        before: 0,
        after: 100
    };

    new Glide(slider, {
        startAt: 0,
        perView: perView,
        perTouch: 1,
        autoplay: autoplay,
        gap: 0,
        peek: peek, 
        breakpoints: {
            768: {
                perView: 2,
                peek: 0
            },
            568: {
                perView: 1,
                peek: 0
            }
        }
    }).mount();

});

function equalizeHeights(selector) {
    const elements = document.querySelectorAll(selector);

    // Reset heights first
    elements.forEach(el => {
        el.style.height = 'auto';
    });

    // Find tallest
    let tallest = 0;
    elements.forEach(el => {
        tallest = Math.max(tallest, el.offsetHeight);
    });

    // Apply tallest height
    elements.forEach(el => {
        el.style.height = `${tallest}px`;
    });
}

// equalizeHeights('.reviews-col.glide__slide .review-card');

document.querySelectorAll('.single-video-modal-wrapper').forEach(function(modal) {

    modal.addEventListener('hidden.bs.modal', function() {

        const iframe = modal.querySelector('iframe');

        if (!iframe) {
            return;
        }

        const src = iframe.src;
        iframe.src = '';
        iframe.src = src;

    });

});

document.querySelectorAll('.flip-card').forEach((card) => {
    const buttons = card.querySelectorAll('[data-flip-trigger]');

    buttons.forEach((button) => {
        button.addEventListener('click', () => {
            const isFlipped = card.classList.contains('flipped');

            card.classList.toggle('flipped');

            card.querySelectorAll('[data-flip-trigger]').forEach((btn) => {
                btn.setAttribute(
                    'aria-expanded',
                    (!isFlipped).toString()
                );
            });
        });
    });
});