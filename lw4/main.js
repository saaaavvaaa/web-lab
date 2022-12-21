const information = document.querySelector(".information");
const zoo = document.querySelector("#zoo");
const number = document.querySelector("#number");

const createBlock = (arr) => {
  const zooBlock = document.createElement("div");
  const zooBlockImage = document.createElement("img");

  zooBlock.className = "";
  zooBlockImage.src = arr.image;

  information.appendChild(zooBlock);
  zooBlock.appendChild(zooBlockImage);
};

zoo.addEventListener("submit", (event) => {
  event.preventDefault();
  const zooInput = event.target[0];

  console.log(zooInput);

  getForecast(zooInput.value);
});

function getForecast() {
  const url = `https://random.dog/woof.json`;

  fetch(url, { method: "GET" })
    .then((value) => value.json())
    .then((value) => {
      
      console.log(value);
      createBlock(value);
    }
      // value.forEach((arr) => {
      //   createBlock(arr);
      // })
    );
}