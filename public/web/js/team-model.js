const teamModal = document.getElementById("teamModal");

document.querySelectorAll(".open-team-modal").forEach(card => {
    card.addEventListener("click", function (e) {
        e.preventDefault();

        const name = this.dataset.name;
        const designation = this.dataset.designation;
        const img = this.dataset.img;
        const description = this.querySelector(".team-bio").innerHTML;

        document.getElementById("teamMemberTitle").innerHTML = name;
        document.getElementById("teamMemberImg").src = img;
        document.getElementById("teamMemberDesignation").innerHTML = designation;
        document.getElementById("teamMemberDesc").innerHTML = description;

        teamModal.style.display = "block";
        document.body.classList.add("overflow-hidden");
    });
});

function closeProductsModal() {
    teamModal.style.display = "none";
    document.body.classList.remove("overflow-hidden");
}

const closeBtn = document.querySelector(".close-btn-products");
if (closeBtn) {
    closeBtn.onclick = closeProductsModal;
}

window.addEventListener("click", function (e) {
    if (e.target === teamModal) {
        closeProductsModal();
    }
});

document.addEventListener("keydown", function (e) {
    if (e.key === "Escape") {
        closeProductsModal();
    }
});