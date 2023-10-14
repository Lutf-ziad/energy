$(document).ready(function () {
    Livewire.on("close-modal", function () {
        $(".modal").modal("hide");
    });
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $("#go-to-top").fadeIn();
        } else {
            $("#go-to-top").fadeOut();
        }
    });

    // Scroll to top on button click
    $("#go-to-top").click(function () {
        $("html, body").animate({ scrollTop: 0 }, 800);
        return false;
    });
});
$(".select2bs4").select2({
    theme: "bootstrap4",
});
function generateCode(element, digit) {
    var code = "";
    const characters =
        "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    for (let i = 0; i < digit; i++) {
        code += characters.charAt(
            Math.floor(Math.random() * characters.length)
        );
    }
    $("#" + element).val(code);
}
