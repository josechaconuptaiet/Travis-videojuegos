const close = document.querySelector(".close")
const back = document.querySelector(".back");
var comments = document.querySelectorAll('.comment-form');
var answers = document.querySelectorAll('.comment-answer');
var addAnswers = document.querySelectorAll('.add-answer');

back.addEventListener("click", (e) => {
    e.preventDefault()
    window.history.back();
})

// Agregar las opciones del formulario al presionarlo
comments.forEach((comment) => {
    var commentOs = comment.querySelectorAll('.comment-form-options');
    var textarea = comment.querySelector(".textarea");

    commentOs.forEach((commentO) => {
        comment.addEventListener('click', (e) => {
            commentO.classList.remove('hidden');
            commentO.classList.add('activate');
            textarea.style.resize = 'vertical';
            textarea.style.alignContent = 'start';
        });

        window.addEventListener('click', (e) => {
            var close = comment.querySelector('.close');
            if (e.target == close) {
                commentO.classList.remove('activate');
                commentO.classList.add('hidden');
                textarea.style.resize = 'none';
                textarea.style.alignContent = 'center';
            }
        });
    });
});

answers.forEach((answer) => {
    // Hacer fetch de la cantidad de respuestas que tiene un comentario
    var id = answer.getAttribute('data-target');
    fetch(`../../travis/controllers/post-controller.php?id=${id}`) // Reemplaza 'value1' y 'value2' con tus valores reales
        .then(response => response.text())
        .then(data => {
            if (data != 0) {
                var nuevoElemento = document.createElement("p");
                nuevoElemento.textContent = data;
                answer.appendChild(nuevoElemento)
            }
        })

    //


    answer.addEventListener('click', (e) => {
        if (e.target !== e.currentTarget) {
            //Si se presiona en uno de sus hijos, aparecer todos los comentarios
            var target = e.currentTarget.getAttribute('data-target');
            var answers = document.querySelectorAll(`.comment[data-id="${target}"]`);

            answers.forEach(answer => {
                if (answer) {
                    answer.classList.toggle('hidden')
                }

            });
        }
        // Al presionar el boton, aparecer todos los comentarios
        var target = e.target.getAttribute('data-target');
        var answers = document.querySelectorAll(`.comment[data-id="${target}"]`);

        answers.forEach(answer => {
            if (answer) {
                answer.classList.toggle('hidden')
            }

        });


    });
});


addAnswers.forEach((answer) => {
    answer.addEventListener('click', (e) => {
        if (e.target !== e.currentTarget) {
            // Al presionar el boton, aparecer el formulario
            var target = e.currentTarget.getAttribute('data-target');
            var form = document.querySelector(`.comment-form[data-id="${target}"]`);

            if (form) {
                form.classList.toggle('hidden')
            }
        }


        // Al presionar el boton, aparecer el formulario
        var target = e.target.getAttribute('data-target');
        var form = document.querySelector(`.comment-form[data-id="${target}"]`);

        if (form) {
            form.classList.toggle('hidden')
        }
    });
});

