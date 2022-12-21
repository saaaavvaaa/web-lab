const input = document.querySelector('#inp')
const delet = document.querySelector('#delet')
const ready = document.querySelector('#ready')
const ordersSection = document.querySelector('#orders-section')
const addButton = document.querySelector('.menu-button')

addButton.addEventListener('click', e => {
  if (input.value === '') return 
  createDeleteElements(input.value)
  input.value = ''
})

function createDeleteElements(value) {
  const div = document.createElement('div')
  const delet = document.createElement('button')
  const ready = document.createElement('button')
  const deletImage = document.createElement('img');
  const readyImage = document.createElement('img');

    div.className = 'list';
    div.textContent = input.value;
    ordersSection.appendChild(div);

    delet.className = 'delet';
    ready.className = 'ready';

    deletImage.src = "./img/Vectorbasket.svg";
    readyImage.src = "./img/Vectorcheckmark.svg";

    div.appendChild(delet);
    div.appendChild(ready);

    delet.appendChild(deletImage);
    ready.appendChild(readyImage);

  delet.addEventListener('click', e => {
    ordersSection.removeChild(div)
  })

  ready.addEventListener('click', e => {
    div.classList.toggle('reading')
  })
}
