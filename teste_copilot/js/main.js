(function(){
  // Mobile menu
  const menuToggle = document.getElementById('menuToggle');
  const menu = document.getElementById('menu');
  if(menuToggle){
    menuToggle.addEventListener('click', ()=> {
      const shown = menu.style.display === 'flex';
      menu.style.display = shown ? '' : 'flex';
      menu.style.flexDirection = 'column';
      menu.style.gap = '12px';
      menu.style.background = 'transparent';
    });
  }

  // Theme toggle
  const themeToggle = document.getElementById('themeToggle');
  themeToggle?.addEventListener('click', ()=>{
    document.body.classList.toggle('theme-light');
  });

  // Reveal on scroll
  const reveals = document.querySelectorAll('.reveal');
  const observer = new IntersectionObserver((entries)=>{
    entries.forEach(e=>{
      if(e.isIntersecting) e.target.classList.add('show');
    });
  }, {threshold:0.12});
  reveals.forEach(r => observer.observe(r));

  // Simple testimonial slider
  const testimonials = Array.from(document.querySelectorAll('.testimonial'));
  let idx = 0;
  function cycleTestimonials(){
    if(!testimonials.length) return;
    testimonials.forEach(t => t.classList.remove('active'));
    testimonials[idx].classList.add('active');
    idx = (idx + 1) % testimonials.length;
  }
  cycleTestimonials();
  setInterval(cycleTestimonials, 4200);

  // Small accessibility: enable keyboard toggle for menu
  document.addEventListener('keydown', (e)=>{
    if(e.key === 'm'){ // pressione "m" para menu
      menuToggle?.click();
    }
    if(e.key === 't'){ // pressione "t" para tema
      themeToggle?.click();
    }
  });
})();
