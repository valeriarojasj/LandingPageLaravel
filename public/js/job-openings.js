window.addEventListener('habilitarTextArea', event => {
  const textAreas = document.querySelectorAll('.textarea'+event.detail.id);
  for(textArea of textAreas){
    textArea.disabled = false;
  }
})
window.addEventListener('deshabilitarTextArea', event => {
  const textAreas = document.querySelectorAll('.textarea'+event.detail.id);
  for(textArea of textAreas){
    textArea.disabled = true;
  }
})

const textAreasInit = document.querySelectorAll('.textareatd');
for (textArea of textAreasInit) {
  textArea.disabled = true;
}


var tdInputs = document.querySelectorAll('.tdParentInput');
for (td of tdInputs) {
  td.style.padding = 0;
}

window.addEventListener('render', event => {
  alert('renderizando');
})
