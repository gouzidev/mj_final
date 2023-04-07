$(document).ready(function() {
    // get all elements with the class "fade-in"
    const elements = $('.fade-in');
    $(window).scroll(function() {
      // loop through each element
      elements.each(function() {
        // check if the element is in view
        if (isScrolledIntoView($(this))) {
          // add the "visible" class to the element
          $(this).addClass('visible');
        }
      });
    });
  
    // function to check if an element is in view
    function isScrolledIntoView(elem) {
      const docViewTop = $(window).scrollTop();
      const docViewBottom = docViewTop + $(window).height();
      const elemTop = elem.offset().top;
      const elemBottom = elemTop + elem.height();
      return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
    }
  });
  