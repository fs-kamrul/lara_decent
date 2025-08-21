
document.querySelector("#showAlertButton").addEventListener("click", showAlert);

function showAlert() {
    let initialWidth = 1100;
    if (window.innerWidth < 1023) {
        initialWidth = window.innerWidth - 20;
    }

    let vertualIframe = document.getElementById("vertualIframe").innerHTML;

    Swal.fire({
        width: initialWidth,
        showCloseButton: true,
        showConfirmButton: false,
        background: "transparent",
        target: "body",
        backdrop: "rgba(0, 0, 0, .7)",
        html: vertualIframe,
    });
}
