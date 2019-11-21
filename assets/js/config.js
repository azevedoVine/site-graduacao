
							$(function() {
								$(window).resize();
							});
							$('#menu').dmenu({
								menu 	: {
									logo			: true,
									align			: 'right'
								},
								item	: {
									bg				: true,
									border 			: false,
									subindicator	: true,

									fit			: [
										{
											items 		: null,
											fitter 		: 'icon-hide',
											order		: 'all'
										},
										{
											items 		: null,
											fitter 		: 'icon-only',
											order		: 'all'
										},
										{
											items 		: ':not(.dm-item_align-right)',
											fitter 		: 'submenu',
											order		: 'rtl'
										},
										{
											items 		: ':not(.dm-item_align-right)',
											fitter 		: 'hide',
											order		: 'rtl'
										}
									]
								},
								submenu	: {
									arrow			: false,
									border			: false,
									shadow			: true
								},
								subitem	: {
									bg				: true,
									border			: false
								}

                            });
                            
function verMais() {
    var x = document.getElementById("div-info");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }
  function verMais1() {
    var x = document.getElementById("div-info1");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }
  
  function verMais2() {
    var x = document.getElementById("div-info2");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }
  
  function verMais3() {
    var x = document.getElementById("div-info3");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }

  const openModalButtons = document.querySelectorAll('[data-modal-target]')
  const closeModalButtons = document.querySelectorAll('[data-close-button]')
  const overlay = document.getElementById('overlay')
  
  openModalButtons.forEach(button => {
    button.addEventListener('click', function(){
      const modal = document.querySelector(button.dataset.modalTarget)
      openModal(modal)
    })
  })
  
  overlay.addEventListener('click', function(){
    const modals = document.querySelectorAll('.modal.active')
    modals.forEach(modal => {
      closeModal(modal)
    })
  })
  
  closeModalButtons.forEach(button => {
    button.addEventListener('click', () => {
      const modal = button.closest('.modal')
      closeModal(modal)
    })
  })
  
  function openModal(modal) {
    if (modal == null) return
    modal.classList.add('active')
    overlay.classList.add('active')
  }
  
  function closeModal(modal) {
    if (modal == null) return
    modal.classList.remove('active')
    overlay.classList.remove('active')
  }

  var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}

  