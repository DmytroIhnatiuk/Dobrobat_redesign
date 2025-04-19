import {aboutUsSlider, newsSlider, ourTeamSlider, partnersSlider, volunteersSlider} from "../modules/sliders.js";
import initTabs from "../modules/tabs.js";


window.addEventListener('DOMContentLoaded', () => {
    try {
        aboutUsSlider()
        newsSlider()
        volunteersSlider()
        ourTeamSlider()
        initTabs()
        partnersSlider()
    } catch (e) {
        console.log(e)
    }
})



