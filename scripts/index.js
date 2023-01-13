window.addEventListener("load", () => {
    const tabsList = document.querySelectorAll("#solutions_tab_item");




    function setupHomeCarousel() {
        const setupProgressBar = (emblaApi, progressNode) => {
            const applyProgress = () => {
                const progress = Math.max(0, Math.min(1, emblaApi.scrollProgress()))
                progressNode.style.width = `${progress * 100}%`
            }
            const removeProgress = () => {
                progressNode.style.width = '0%'
            }
            return {
                applyProgress,
                removeProgress,
            }
        }

        const OPTIONS = { loop: true }
        const homeSliderNode = document.getElementById('home_sldier');
        const progressNode = document.getElementById('home_sider_progress_bar');
        const homeSliderPrevBtn = document.getElementById("home_slider_prev_btn");
        const homeSliderNextBtn = document.getElementById("home_slider_next_btn");
        const homeSliderCurSlideNum = document.getElementById("home_slider_cur_slide_num");

        const homeSliderCarousel = EmblaCarousel(homeSliderNode, OPTIONS)
        const { applyProgress, removeProgress } = setupProgressBar(
            homeSliderCarousel,
            progressNode,
        )

        homeSliderNextBtn.onclick = homeSliderCarousel.scrollNext
        homeSliderPrevBtn.onclick = homeSliderCarousel.scrollPrev

        const applyCurrentSlideNum = () => {
            const _value = homeSliderCarousel.selectedScrollSnap() + 1
            if (_value < 10) homeSliderCurSlideNum.innerText = "0" + _value
            else homeSliderCurSlideNum.innerText = _value

        }

        homeSliderCarousel
            .on('init', () => {
                applyProgress();
                applyCurrentSlideNum();
            })
            .on('reInit', applyProgress)
            .on('scroll', applyProgress)
            .on('destroy', removeProgress)
            .on("select", applyCurrentSlideNum)
    }







    
    function setSolutionsTabviewCarousel() {
        var solutionsTabviewSliderNode = document.getElementById('solutions_tabview_slider')
        var options = { loop: false, draggable: false }
        var solutionsTabviewCarousel = EmblaCarousel(solutionsTabviewSliderNode, options)

        for (let i = 0; i < tabsList.length; i++) {
            tabsList[i].addEventListener("click", () => {
                for (let j = 0; j < tabsList.length; j++) {
                    tabsList[j].classList.remove("active");
                }
                tabsList[i].classList.add("active");
                solutionsTabviewCarousel.scrollTo(i, true)
            })
        }
    }

    setSolutionsTabviewCarousel();
    setupHomeCarousel();
})







