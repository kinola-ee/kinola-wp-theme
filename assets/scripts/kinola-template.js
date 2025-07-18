document.addEventListener('DOMContentLoaded', function () {
  const mobilemenuOpenBtn = document.querySelector('.js-kinola-mobilemenu-open');
  const mobilemenuCloseBtn = document.querySelector('.js-kinola-mobilemenu-close');
  const body = document.body;

  mobilemenuOpenBtn.addEventListener('click', function () {
    body.classList.add('has-kinola-mobilemenu-open');
  });
  mobilemenuCloseBtn.addEventListener('click', function () {
    body.classList.remove('has-kinola-mobilemenu-open');
  });
});
