window.onload = function() {
  var modal = document.getElementById("modal");
  var modalClose = document.querySelector(".modal-close");

  modal.classList.add("active");

  modalClose.addEventListener("click", function() {
      modal.classList.remove("active");
  });
};
