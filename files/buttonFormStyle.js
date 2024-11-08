(function(){
   const sideBar = document.querySelector('.popUp');
   const openingBts = document.querySelector('.formButton');
   const closeBts = document.querySelector('.window__close');
   const popUpContainer = document.querySelector('.popUp__container');

   openingBts.addEventListener('click', function(){
      sideBar.classList.add('popUp--opened');
      popUpContainer.classList.add('popUp__container--opened');
   });

   closeBts.addEventListener('click', function(){
      sideBar.classList.remove('popUp--opened');
   })

   $('.form__tel').mask('+7 (000)-000-00-00');
}())