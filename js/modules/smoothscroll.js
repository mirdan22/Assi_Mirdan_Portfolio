export function smoothscroll() {

  const scrollDuration = 1000;

  const links = document.querySelectorAll('a[href^="#"]');


  links.forEach((link) => {
    link.addEventListener("click", function (e) {
      e.preventDefault();

      const targetId = this.getAttribute("href").substring(1);
      const targetElement = document.getElementById(targetId);

      if (targetElement) {

        const distanceToScroll = targetElement.getBoundingClientRect().top;

        if ("scrollBehavior" in document.documentElement.style) {
          window.scrollTo({
            top: targetElement.offsetTop - 70,
            behavior: "smooth",
          });
        } else {
          const startTime = performance.now();
          const startScrollY = window.scrollY;

          function scrollStep(timestamp) {
            const progress = Math.min((timestamp - startTime) / scrollDuration, 1);
            window.scrollTo(0, startScrollY + distanceToScroll * progress);

            if (progress < 1) {
              requestAnimationFrame(scrollStep);
            }
          }

          requestAnimationFrame(scrollStep);
        }
      }
    });
  });
}
