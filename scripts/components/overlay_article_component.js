const overlayArticleComponent = document.getElementById("overlay_article_component");
const overlayDialogBtn = overlayArticleComponent.querySelector("#overaly_dialog_close_btn");



window.addEventListener("DOMContentLoaded", () => {
    setTimeout(() => {
        overlayArticleComponent.style.display = "flex"
    }, 5000)


    overlayDialogBtn.addEventListener("click", () => {
        overlayArticleComponent.remove();
    })
})

