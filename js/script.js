var moreButtonEvent = function () {
  if (this.getAttribute('data-more') == 0) {
    this.setAttribute('data-more', 1);
    this.innerHTML = 'Читать меньше';
    this.previousSibling.previousSibling.style.display = 'block';
  } else if (this.getAttribute('data-more') == 1) {
    this.setAttribute('data-more', 0);
    this.innerHTML = 'Читать больше';
    this.previousSibling.previousSibling.style.display = 'none';
  }
};
var moreButtonsList = document.getElementsByClassName('page-main__button');
for (var i = 0; i < moreButtonsList.length; i++) {
  moreButtonsList[i].addEventListener('click', moreButtonEvent);
}
var link = document.querySelector(".social-list__button");
var popup = document.querySelector(".modal");
var close = popup.querySelector(".modal__close-btn");
var login = popup.querySelector("[name=username]");
link.addEventListener("click", function (evt) {
  evt.preventDefault();
  popup.classList.add("modal-show");
  username.focus();
});
close.addEventListener("click", function (evt) {
  evt.preventDefault();
  popup.classList.remove("modal-show");
});
window.addEventListener("keydown", function (evt) {
  if (evt.keyCode === 27) {
    evt.preventDefault();
    if (popup.classList.contains("modal-show")) {
      popup.classList.remove("modal-show");
    }
  }
});