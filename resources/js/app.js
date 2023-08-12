import "./bootstrap";

import Alpine from "alpinejs";

// Script for Collapse Sidebar
document
    .getElementById("sidebarCollapseDefault")
    .addEventListener("click", sidebarCollapse);

function sidebarCollapse() {
    document.getElementById("nav-sidebar").classList.toggle("active");
    document.getElementById("main-content").classList.toggle("active");
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
})

const overlays = document.querySelectorAll(".modal-overlay");
overlays.forEach((overlay) => {
    overlay?.addEventListener("click", () => {
        toggleModal(overlay.id, "overlay");
    });
})

var closemodals = document.querySelectorAll("[class^=modal-close");
closemodals.forEach((closemodal) => {
    closemodal?.addEventListener("click", () => {
        toggleModal(closemodal.id, "close");
    });
})

function toggleModal(itemId, itemName) {
    event.preventDefault();
    // Split by string "-action" to get "modal-n" (n is number)
    var modalId = itemId.split('-' + itemName)[0];
    const modal = document.getElementById(modalId);
    modal.classList.toggle("opacity-0");
    modal.classList.toggle("pointer-events-none");
}

window.Alpine = Alpine;

Alpine.start();

// Script for Pelamar Potensial
document.addEventListener("DOMContentLoaded", () => {
    // Searching for all class starting with "text-[" (job type inner text)
    var jobTypes = document.querySelectorAll("[class^=text-\\[]");
    jobTypes.forEach(jobType => {
        // Take value of 7 characters hex from class after splitting "text-[" for text color
        var textColorHex = jobType.classList.value.split("text-[")[1].slice(0, 7);
        // Take value of 7 characters hex from class after splitting "bg-[" for bg color
        var bgColorHex = jobType.parentNode.classList.value.split("bg-[")[1].slice(0, 7);

        jobType.style.color = textColorHex;
        jobType.parentNode.style.backgroundColor = bgColorHex;
    });
});

// Script for Tipe Pekerjaan
document.addEventListener("DOMContentLoaded", () => {
    var colorDots = document.getElementsByClassName("color-dot");
    var colorHexes = document.getElementsByClassName("color-hex");

    // Set Background Color for Dots
    for (var i = 0; i < colorDots?.length; i++) {
        colorDots[i].style.backgroundColor = colorHexes[i].innerHTML;
    }
});

var tipePekerjaan = document.getElementById("tipe_pekerjaan");
var bgColor = document.getElementById("bg_color");
var textColor = document.getElementById("text_color");
var bgPreview = document.getElementById("bg_preview");
var textPreview = document.getElementById("text_preview");

function previewJobType() {
    textPreview.innerHTML =
        tipePekerjaan.value != "" ? tipePekerjaan.value : "Tipe Pekerjaan";
    textPreview.style.color = textColor.value;
    bgPreview.style.backgroundColor = bgColor.value;
}

if (tipePekerjaan && bgColor && textColor) {
    tipePekerjaan.addEventListener("input", previewJobType);
    bgColor.addEventListener("input", previewJobType);
    textColor.addEventListener("input", previewJobType);
    previewJobType();
}

// Script for Text Editor
ClassicEditor.create(document.querySelector("#deskripsi"));
ClassicEditor.create(document.querySelector("#persyaratan"));
