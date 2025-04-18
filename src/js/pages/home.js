import {aboutUsSlider, newsSlider, ourTeamSlider, volunteersSlider} from "../modules/sliders.js";
import initTabs from "../modules/tabs.js";


window.addEventListener('DOMContentLoaded', () => {
    try {
        aboutUsSlider()
        newsSlider()
        volunteersSlider()
        ourTeamSlider()
        initTabs()
    } catch (e) {
        console.log(e)
    }
})



