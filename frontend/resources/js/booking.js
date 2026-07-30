window.openAppointmentModal = function () {
    const scrollY = window.scrollY;

    document.body.style.position = "fixed";
    document.body.style.top = `-${scrollY}px`;
    document.body.style.left = "0";
    document.body.style.right = "0";
    document.body.style.width = "100%";

    const modal = document.getElementById("appointmentModal");
    modal.classList.remove("hidden");
    modal.classList.add("flex");
};

window.closeAppointmentModal = function () {
    const modal = document.getElementById("appointmentModal");
    modal.classList.remove("flex");
    modal.classList.add("hidden");

    const scrollY = Math.abs(parseInt(document.body.style.top || "0"));

    document.body.style.position = "";
    document.body.style.top = "";
    document.body.style.left = "";
    document.body.style.right = "";
    document.body.style.width = "";

    window.scrollTo({
        top: scrollY,
        behavior: "instant",
    });
};