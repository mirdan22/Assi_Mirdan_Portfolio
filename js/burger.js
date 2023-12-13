(() => {
    
  const btn_burger = document.querySelector('.hamburger');
  const burger_menu = document.querySelector('.burger_menu');
  const burger_image = document.querySelector("#hamburger-icon");
  
  
  function openBurgerMenu() {
    btn_burger.classList.toggle('is-active');
    burger_menu.classList.toggle('is-active');
    if (btn_burger.classList.contains("is-active")){
      burger_image.src = "images/hamburger.svg";
    } else{
      burger_image.src = "images/hamburger.svg";
    }
  };
  
  
  function closeBurgerMenu() {
    btn_burger.classList.toggle('is-active');
    burger_menu.classList.toggle('is-active');
    if (btn_burger.classList.contains("is-active")){
      burger_image.src = "images/hamburger.svg";
    } else{
      burger_image.src = "images/hamburger.svg";
    }
  };
  
  burger_menu.addEventListener("click", closeBurgerMenu);
  btn_burger.addEventListener("click", openBurgerMenu);
  
  
  })();