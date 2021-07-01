var width = 320;
var height = 0;
var streaming = false;
let video = document.querySelector("#video");
let canvas = document.querySelector("#canvas");
let picture = document.querySelector("#picture");
let takePictureBtn = document.querySelector("#takePictureBtn");
let downloadPictureBtn = document.querySelector("#downloadPictureBtn");
let clearPictureBtn = document.querySelector("#clearPictureBtn");

/* ------------------ Capture Picture ------------------- */

function startup() {
  // getMediaDevices();
  videoEventListener();
  takePictureBtnEventListener();
  clearPicture();
}

// function getMediaDevices() {
//   navigator.mediaDevices
//     .getUserMedia({
//       video: true,
//     })
//     .then((stream) => {
//       video.srcObject = stream;
//       video.play();
//     })
//     .catch((err) => {
//       alert("Error occured: ", err);
//     });
// }

function videoEventListener() {
  video.addEventListener(
    "canplay",
    (event) => {
      if (!streaming) {
        height = video.videoHeight / (video.videoWidth / width);

        if (isNaN(height)) {
          height = width / (4 / 3);
        }

        video.setAttribute("width", width);
        video.setAttribute("height", height);
        canvas.setAttribute("width", width);
        canvas.setAttribute("height", height);
        // streaming = true;
      }
    },
    false
  );
}

function takePictureBtnEventListener() {
  takePictureBtn.addEventListener(
    "click",
    (event) => {
      event.preventDefault();
      takePicture();
    },
    false
  );
}

function clearPicture() {
  let context = canvas.getContext("2d");
  context.fillStyle = "#AAA";
  context.fillRect(0, 0, canvas.width, canvas.height);

  let data = canvas.toDataURL("image/png");
  picture.setAttribute("src", data);
}

function takePicture() {
  let context = canvas.getContext("2d");
  if (width && height) {
    canvas.width = width;
    canvas.height = height;
    context.drawImage(video, 0, 0, width, height);

    let data = canvas.toDataURL("image/png");

    picture.setAttribute("src", data);
  } else {
    clearPicture();
  }
}

clearPictureBtn.addEventListener("click", (event) => {
  clearPicture();
});

downloadPictureBtn.addEventListener("click", function (event) {
  event.preventDefault();

  let image = canvas
    .toDataURL("image/png", 1.0)
    .replace("image/png", "image/octet-stream");

  let link = document.createElement("a");
  link.download = "me.png";
  link.href = image;
  link.click();
});

window.addEventListener("load", startup, false);
