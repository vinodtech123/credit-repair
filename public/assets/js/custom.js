$(window).scroll(function(){
  if ($(window).scrollTop() >= 1) {
      $('header').addClass('fixed-header');
  }
  else {
      $('header').removeClass('fixed-header');

  }
});




//////Custom Select
var x, i, j, l, ll, selElmnt, a, b, c;
/* Look for any elements with the class "custom-select": */
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /* For each element, create a new DIV that will act as the selected item: */
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /* For each element, create a new DIV that will contain the option list: */
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /* For each option in the original select element,
    create a new DIV that will act as an option item: */
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /* When an item is clicked, update the original select box,
        and the selected item: */
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
    /* When the select box is clicked, close any other select boxes,
    and open/close the current select box: */
    e.stopPropagation();
    closeAllSelect(this);
    this.nextSibling.classList.toggle("select-hide");
    this.classList.toggle("select-arrow-active");
  });
}

function closeAllSelect(elmnt) {
  /* A function that will close all select boxes in the document,
  except the current select box: */
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}

/* If the user clicks anywhere outside the select box,
then close all select boxes: */
document.addEventListener("click", closeAllSelect);



/*Add class to parent div when checkbox in checked JS (For Page add bank account )*/
$(":checkbox").on('click', function(){
      $(this).parents('.bank-account-panel').toggleClass("checked");
});





//////Accordian FAQ Page Js
$(document).ready(function(){
    // Add minus icon for collapse element which is open by default
    $(".collapse.show").each(function(){
      $(this).prev(".card-header").find(".icon").addClass("icon-minus-ic").removeClass("icon-plus-ic");
    });
    
    // Toggle plus minus icon on show hide of collapse element
    $(".collapse").on('show.bs.collapse', function(){
      $(this).prev(".card-header").find(".icon").removeClass("icon-plus-ic").addClass("icon-minus-ic");
    }).on('hide.bs.collapse', function(){
      $(this).prev(".card-header").find(".icon").removeClass("icon-minus-ic").addClass("icon-plus-ic");
    });
});

/*Verification JS*/
$('.digit-group').find('input').each(function() {
  $(this).attr('maxlength', 1);
  $(this).on('keyup', function(e) {
    var parent = $($(this).parent());
    
    if(e.keyCode === 8 || e.keyCode === 37) {
      var prev = parent.find('input#' + $(this).data('previous'));
      
      if(prev.length) {
        $(prev).select();
      }
    } else if((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 65 && e.keyCode <= 90) || (e.keyCode >= 96 && e.keyCode <= 105) || e.keyCode === 39) {
      var next = parent.find('input#' + $(this).data('next'));
      
      if(next.length) {
        $(next).select();
      } else {
        if(parent.data('autosubmit')) {
          parent.submit();
        }
      }
    }
  });
});



$(document).ready(
  function(){
      $(".icon-search").click(function () {
          $(".header-menus form").toggle("2000");
      });
 
  });



  //Sidebar responsive
/*Sidebar my account*/
// $(document).ready(function(){
//   $('.left-side-btn').click(function(e){
//       e.stopPropagation();
//        $('.side_bar_main').toggleClass('show-sidebar');
//   });
//   $('.side_bar_main').click(function(e){
//       e.stopPropagation();
//   });
//   $('#close-btn').click(function(e){
//          $('.side_bar_main').removeClass('show-sidebar');
//   });
// });



// sidebar menu

/*const $button = document.querySelector('#sidebar-toggle');
const $wrapper = document.querySelector('#wrapper');

$button.addEventListener('click', (e) => {
    e.preventDefault();
    $wrapper.classList.toggle('toggled');
});


let slider = document.getElementById('slider')
let selector = document.getElementById('selector')
let selectValue = document.getElementById('selectValue')
let progressBar = document.getElementById('progressBar')

selectValue.innerHTML = slider.value

slider.oninput = function() {
  selectValue.innerHTML = this.value
  selector.style.left = this.value + '%'
  progressBar.style.width = this.value + '%'
}*/



/*Sidebar my account*/
$(document).ready(function(){
    $('.left-side-btn').click(function(e){
        e.stopPropagation();
         $('.side_bar_main').toggleClass('show-sidebar');
    });
    $('.side_bar_main').click(function(e){
        e.stopPropagation();
    });
    $('#close-btn').click(function(e){
           $('.side_bar_main').removeClass('show-sidebar');
    });
});


//  side bar menu
const $button = document.querySelector('#sidebar-toggle');
const $wrapper = document.querySelector('#wrapper');

$button.addEventListener('click', (e) => {
    e.preventDefault();
    $wrapper.classList.toggle('toggled');
});




