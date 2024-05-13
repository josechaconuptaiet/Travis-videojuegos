const modalWindow = document.querySelector(".post-modal")
const addPost = document.getElementById("create-post")
const X = document.querySelector(".modal-close")

addPost.addEventListener("click", (e) => {
    e.preventDefault()
    modalWindow.classList.remove("hidden");
    modalWindow.classList.add("activate");
})

// Cerrar modal
window.addEventListener("click", (e) => {
    if (e.target == modalWindow) {
        modalWindow.classList.remove("activate");
        modalWindow.classList.add("hidden");
    }
});

X.addEventListener("click", (e) => {
    modalWindow.classList.remove("activate");
    modalWindow.classList.add("hidden");
});