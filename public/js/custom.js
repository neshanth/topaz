let fileInput = document.querySelector(".custom-file-input");
let fileInfo = document.getElementById("file-info");

// To read file Name based on the src
function getFileName(e) {
    let fileSrc = e.target.files;
    let fileName = fileSrc[0].name;
    fileInfo.textContent = fileName;
}

//Event Listener to detect file input change
fileInput.addEventListener("change", getFileName);
