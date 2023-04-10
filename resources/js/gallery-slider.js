var glide = new Glide("#gallery", {
    type: "carousel",
    perView: 2.5,
    focusAt : 'center',
    gap:0,
    breakpoints: {
        1030:{
            perView: 2
        },
        800:{
            perView:1
        }}
  });

  glide.mount();