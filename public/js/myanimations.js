  ScrollReveal().reveal('.myanimate', {

    opacity: 0.8, 
    duration: 2000, 
    distance: '30%', 
    origin: 'top', 
    interval: 15, 
    reset: true
  });

    ScrollReveal().reveal('.myanimate-bottom', {

    opacity: 0.8, 
    duration: 2500, 
    distance: '30%', 
    origin: 'bottom', 
    interval: 15, 
    reset: true
  });

  ScrollReveal().reveal('.myanimate-left', {

    opacity: 0.8, 
    duration: 2500, 
    distance: '30%', 
    origin: 'left', 
    interval: 15, 
    reset: true
  });

  ScrollReveal().reveal('.myanimate-right', {

    opacity: 0.8, 
    duration: 2500, 
    distance: '30%', 
    origin: 'right', 
    interval: 15, 
    reset: true
  });


  ScrollReveal().reveal('.myanimate-low', {

    opacity: 0.8, 
    duration: 4000, 
    distance: '150%', 
    origin: 'top', 
    interval: 15, 
    reset: true
  });

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
        });
      });
    });
