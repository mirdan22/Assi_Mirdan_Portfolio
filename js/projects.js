
(function () {
  gsap.registerPlugin(ScrollTrigger);

  gsap.set('.project-img, .project-img2', { opacity: 0 });


  function fadeInFrom(direction, element) {
    let xValue = direction === 'left' ? '-100%' : '100%';

    gsap.to(element, {
      opacity: 1,
      x: '0%',
      duration: 1,
      scrollTrigger: {
        trigger: element,
        start: 'top 70%',
        toggleActions: 'play none none reverse',
      },
    });
  }


  fadeInFrom('left', '.project-img');
  fadeInFrom('right', '.project-img2');
})();


(function () {
  const tl = gsap.timeline({ defaults: { ease: "text.out" } });

  const heroText = document.querySelector(".hero-text");
  
  gsap.set(heroText, { x: "-40%", opacity: 0 });

  tl.to(heroText, {
    x: "0%",
    opacity: 1,
    duration: 2,
    ease: "text.out",
  });


  const h2Elements = document.querySelectorAll("h2.fade");

  gsap.set(h2Elements, { opacity: 0 });

  h2Elements.forEach((h2) => {
    gsap.to(h2, {
      opacity: 1,
      duration: 1,
      scrollTrigger: {
        trigger: h2,
        start: "top 100%",
      },
    });
  });

  tl.fromTo(
    h2Elements,
    { opacity: 0, y: 20 },
    { opacity: 1, y: 0, duration: 1, stagger: 0.2 }
  );

  h2Elements.forEach((h2) => {
    gsap.to(h2, {
      opacity: 1,
      y: 0,
      duration: 1,
      scrollTrigger: {
        trigger: h2,
        start: "top 80%",
      },
    });
  });
})();
