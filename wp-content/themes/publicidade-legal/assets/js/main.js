function esconderTudo() {
  $(".overlay").removeClass('ativo');
  $(".modal-box").removeClass('ativo');
  $(".linguas_wrap ul").removeClass('ativo');
  $("body").removeClass('overflow');
}

$("a.fechar, .overlay").click(function() {
  esconderTudo()
});

function modalTrigger(nomeId) {
  $("#" + nomeId).addClass('ativo');
  $(".overlay").addClass('ativo');
  $("body").addClass('overflow');
}

$("a.modal-trigger").click(function() {
  var nomeId = $(this).data('id');
  modalTrigger(nomeId);
});

// **********************************
//           checkbox e radio
// **********************************

$(function() {
  $(document)
  .on('change', 'input[type=checkbox]',  function(e) {
    e.preventDefault();

    const $this = $(this);

    $this.prop('checked') ? $this.parent().addClass('ativo') : $this.parent().removeClass('ativo');
  })
  .on('change', 'input[type=radio]', function (e) {
    e.preventDefault();
    let $this = $(this);
    let name = $this.attr('name');
    $('input[type=radio][name=' + name + ']').parent().removeClass('ativo');

    $this.parent().toggleClass('ativo');
  });
});


// **********************************
//             Accordion
// **********************************

// $(".accordion_trigger, .trigger").click(function() {
//   $(this).toggleClass('ativo');
//   $(this).next('.item').slideToggle('swing');
// });

// $('.owl-1').owlCarousel({
//   loop:true,
//   margin:0,
//   nav:true,
//   responsive:{
//     0:{
//       items:1
//     },
//     600:{
//       items:1
//     },
//     1000:{
//       items:1
//     }
//   }
// });