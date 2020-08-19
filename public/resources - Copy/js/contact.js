
let modalTriggerBtn = document.querySelector(".js_modal_trigger__btn");
let closeBtn = document.querySelector(".modal_contact__close");
let contactModal = document.querySelector(".contact_modal");
let innerModal = document.querySelector(".contact_modal_inner");
contactModal.style.height = "1500px";
contactModal.style.overflow = "auto";

modalTriggerBtn.addEventListener("click", function (e) {
    e.preventDefault();
    document.body.style.height = "100vh";
    document.body.style.overflow = "hidden";
    toggleModal();

});


closeBtn.addEventListener("click", function () {
    toggleModal();
    document.body.style.height = "auto";
    document.body.style.overflow = "auto";

});

window.addEventListener("click", function (e) {
    if (e.target === innerModal){
        toggleModal();
        document.body.style.height = "auto";
        document.body.style.overflow = "auto";
    }
})

function toggleModal() {
    contactModal.classList.toggle("contact_modal--show");
}

