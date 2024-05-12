const modalWindow = document.querySelector(".post-modal")
const addPost = document.getElementById("create-post")
const X = document.querySelector(".fa-xmark")

addPost.addEventListener("click", (e) => {
    e.preventDefault()
    modalWindow.classList.remove("hidden");
    modalWindow.classList.add("activate");
})

// Cerrar modal
window.addEventListener("click", (event) => {
    if (event.target == modalWindow) {
        modalWindow.classList.remove("activate");
        modalWindow.classList.add("hidden");
    }
});

X.addEventListener("click", (event) => {
    modalWindow.classList.remove("activate");
    modalWindow.classList.add("hidden");
});