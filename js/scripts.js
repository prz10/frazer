function aosInit() {
    AOS.init({
      startEvent: "DOMContentLoaded",
      initClassName: "aos-init",
      animatedClassName: "aos-animate",
      offset: 120,
      delay: 20,
      duration: 600,
      easing: "ease",
      once: false,
      mirror: false,
      anchorPlacement: "top-bottom",
      debounceDelay: 50,
      throttleDelay: 99,
    });
  }

  jQuery(document).ready(function () {
    aosInit();
  });