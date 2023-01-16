const blogsFilterCategoriesContainer = document.getElementById("blogs_filter_categories");
const blogsFilterCategories = blogsFilterCategoriesContainer.children;
const blogsFilterCategoriesScollContainer = blogsFilterCategoriesContainer.parentElement;
const filterCategoriesScrollNextBtn = document.getElementById("categories_next_scroll_btn");
const filterCategoriesScrollPrevBtn = document.getElementById("categories_prev_scroll_btn");





filterCategoriesScrollNextBtn.addEventListener("click", ()=> {
    blogsFilterCategoriesScollContainer.scrollBy(100,0)
})

filterCategoriesScrollPrevBtn.addEventListener("click", ()=> {
    blogsFilterCategoriesScollContainer.scrollBy(-100,0)
})


for (let i = 0; i < blogsFilterCategories.length; i++) {
    blogsFilterCategories[i].addEventListener("click", () => {
        for (let j = 0; j < blogsFilterCategories.length; j++) {
            blogsFilterCategories[j].classList.remove("active");
        }
        blogsFilterCategories[i].classList.add("active");
    })
}

