// Industries tab select logic

window.addEventListener("load", function() {

    // store tabs variable
    const industryTab = document.querySelectorAll("ul.nav-tabs > li");

    function industryClick (industryClickEvent){
        // remove "active" class from each list item
        for (var i = 0; i < industryTab.length; i++) {
            industryTab[i].classList.remove("active");
        }

        // Assign "active" to targeted list item
        const clickedTab = industryClickEvent.currentTarget;
        clickedTab.classList.add("active");
        industryClickEvent.preventDefault();

        // remove "active" class from each content section
        const industryContentPanes = document.querySelectorAll(".tab-pane");
        for (i = 0; i < industryContentPanes.length; i++) {
            industryContentPanes[i].classList.remove("active");
        }

        // Assign "active" to targeted content section
        const anchorReference = industryClickEvent.target;
        const activePaneId = anchorReference.getAttribute("href");
        const activePane = document.querySelector(activePaneId);
        activePane.classList.add("active");

    }
    // Assign event listeners on list items
    for (i = 0; i < industryTab.length; i++) {
        industryTab[i].addEventListener("click", industryClick)
    }
});
