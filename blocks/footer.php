    <div class="position-relative"> 
        <div class="position-absolute top-100 start-50 translate-middle m-0">
            <button class=" btn btn-sm btn-outline-primary" onclick="topFunction()" id="myBtn" title="Go to top">Вверх</button>   
        </div>         
    </div>
      
    <script>
          // Получить кнопку:
            mybutton = document.getElementById("myBtn");
            mybutton.style.display = "none";

            // Когда пользователь прокручивает вниз 20px от верхней части документа, покажите кнопку
            window.onscroll = function() {scrollFunction()};

            function scrollFunction() {
            if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
            }
            // Когда пользователь нажимает на кнопку, прокрутите до верхней части документа
            function topFunction() {
            document.body.scrollTop = 0; // Для Safari
            document.documentElement.scrollTop = 0; // Для Chrome, Firefox, IE и Opera
            }   
    </script>
      
    <footer class="container mt-5 my-md-5 pt-md-5 border-top">
        <div class="row">
            <div class="col-12 col-md">
                <img class="mb-2" src="img\gerb.png" alt="" width="19" height="24">
                <small class="d-block mb-3 text-muted">© 2022</small>
            </div>
            <div class="col-6 col-md">
                <h6>Донская администрация:</h6>
                <ul class="list-unstyled text-small">
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="https://www.gosuslugi71.ru/?Departments=58106&Municipal=1">Gosuslugi71</a></li>
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="https://vk.com/donskoy.tularegion">ВКонтакте</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h6>Помощь</h6>
                <ul class="list-unstyled text-small">
                <li class="mb-1"><a href="help.php" class="link-secondary text-decoration-none" >Тех.поддержка</a></li>
                <li class="mb-1"><a href="info.php" class="link-secondary text-decoration-none" >Важная информация</a></li>
                </ul>
            </div>
        </div>
    </footer>