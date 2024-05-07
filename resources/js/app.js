import "./bootstrap";

// Script for Collapse Sidebar
var sidebarCollapseDefault = document.getElementById("sidebarCollapseDefault");
if (sidebarCollapseDefault) {
    sidebarCollapseDefault.addEventListener("click", sidebarCollapse);
}

function sidebarCollapse() {
    document.getElementById("nav-sidebar").classList.toggle("active");
    document.getElementById("dashboard-content").classList.toggle("active");
}

// Script for Navbar
var dropdown = document.querySelector(".dropdown");
dropdown?.addEventListener("click", toggleDropdownMenu);

function toggleDropdownMenu() {
    const dropdownMenu = document.querySelector(".dropdown-menu");
    dropdownMenu.classList.toggle("hidden");
}

// Script for Modal
var openmodals = document.querySelectorAll(".modal-open");
openmodals.forEach((openmodal) => {
    openmodal?.addEventListener("click", () => {
        toggleModal(openmodal.id, "open");
    });
});

const overlays = document.querySelectorAll(".modal-overlay");
overlays.forEach((overlay) => {
    overlay?.addEventListener("click", () => {
        toggleModal(overlay.id, "overlay");
    });
});

var closemodals = document.querySelectorAll("[class^=modal-close");
closemodals.forEach((closemodal) => {
    closemodal?.addEventListener("click", () => {
        toggleModal(closemodal.id, "close");
    });
});

function toggleModal(itemId, itemName) {
    event.preventDefault();
    // Split by string "-action" to get "modal-n" (n is number)
    var modalId = itemId.split("-" + itemName)[0];
    const modal = document.getElementById(modalId);
    modal.classList.toggle("opacity-0");
    modal.classList.toggle("pointer-events-none");
}

var btnRating = document.querySelectorAll(".btn-rating");
btnRating.forEach((btn) => {
    btn.addEventListener("click", setRatingValue);
});

var ratingStars = document.querySelectorAll(".rating");
function setRatingValue(event) {
    var value = event.currentTarget.value;

    ratingStars.forEach((star, index) => {
        if (index < value) {
            star.classList.remove("text-gray-300");
            star.classList.add("text-yellow-300");
        } else {
            star.classList.remove("text-yellow-400");
            star.classList.add("text-gray-300");
        }
    });

    document.getElementById("ratingInput").value = value;
}
