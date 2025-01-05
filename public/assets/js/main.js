// profile settings
function showDiv(index) {
  document.querySelectorAll('.content').forEach((div, i) => {
    div.classList.toggle('hidden', i + 1 !== index);
  });
}