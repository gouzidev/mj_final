
import Glide from "@glidejs/glide"
import { Autoplay } from '@glidejs/glide/dist/glide.modular.esm'
var glide = new Glide('#gallery', {
  type: 'carousel',
  focusAt: "center",
  perView: 2,
  autoplay: 4000,
  breakpoints: {
      800: {
      perView: 1
      }
  }
})

glide.mount({ Autoplay })