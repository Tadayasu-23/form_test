"use strict"

document.addEventListener('DOMContentLoaded', function() {
   const form = document.getElementById('form');
   form.addEventListener('submit', formSend);

   async function formSend(e) {
      e.preventDefault();
      
      let error = formValidate(form);

      let formData = new FormData(form);

      if (error === 0) {
         let response = await fetch('../sendmail.php', {
            method: 'POST',
            body: formData
         });
         if (response.ok) {
            let result = await response.json();
            alert(result.message);
            formPreview.innerHTML = '';
            form.reset();
         } else {
            alert('Ошибка');
         }
      } else {
         alert('Заполните все поля');
      }

      function formValidate(form) {
         let error = 0;
         let formReq = document.querySelectorAll('._req');

         for (let index =0; index < formReq.length; index++) {
            const input = formReq[index];
            formRemoveError(input);

            if(input.classList.contains('email')) {
               if(emailTest(input)){
                  formAddError(input);
                  error++;
               }
            } else if(input.getAttribute('type') === 'checkbox' && input.cheked === false) {
               formAddError(input);
               error++;
            } else {
               if (input.valve === '') {
                  formAddError(input);
                  error++;
               }
            }
         }
         return error;
      }
      function formAddError(input) {
         input.parentElement.classList.add('_error');
         input.classList.add('_error');
      }
      function formRemoveError(input) {
         input.parentElement.classList.remove('_error');
         input.classList.remove('_error');
      }

      function emailTest(input) {
         return !/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,8})+$/.test(input.value);
      }
   }
});   
