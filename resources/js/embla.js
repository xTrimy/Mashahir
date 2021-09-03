import EmblaCarousel from "embla-carousel";
import { setupPrevNextBtns, disablePrevNextBtns } from "./prevAndNextButtons";
import "../css/embla.css";
if(document.getElementById('embla')){
    const wrap = document.querySelector(".embla");
    const viewPort = wrap.querySelector(".embla__viewport");
    const prevBtn = wrap.querySelector(".embla__button--prev");
    const nextBtn = wrap.querySelector(".embla__button--next");
    const embla = EmblaCarousel(viewPort, { loop: false, skipSnaps: false });
    const disablePrevAndNextBtns = disablePrevNextBtns(prevBtn, nextBtn, embla);

    setupPrevNextBtns(prevBtn, nextBtn, embla);

    embla.on("select", disablePrevAndNextBtns);
    embla.on("init", disablePrevAndNextBtns);
}