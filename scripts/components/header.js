
window.addEventListener("load", () => {
    const headerMenu = document.getElementById("header_menu");
    const menuExpandBtn = document.getElementById("header_menu_expand_btn");
    const menuCloseBtn = document.getElementById("header_menu_close_btn");

    menuExpandBtn.addEventListener("click", ()=> {
        headerMenu.classList.toggle("active")
    })
    menuCloseBtn.addEventListener("click", ()=> {
        headerMenu.classList.remove("active")
    })
})

