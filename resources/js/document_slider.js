import Glide from "@glidejs/glide";
import { Autoplay } from "@glidejs/glide/dist/glide.modular.esm";
var glide = new Glide("#document_slider", {
    type: "carousel",
    perView: 3,
    autoplay: 4000,
    breakpoints: {
        800: {
            perView: 1,
        },
    },
});

glide.mount({ Autoplay });
