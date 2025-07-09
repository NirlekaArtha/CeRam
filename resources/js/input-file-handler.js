let fileInput = document.getElementById("image-input");

function handleFileChange(event) {
  const fileNameDisplay = document.getElementById("file-name");
  const imagePreview = document.getElementById("preview-image");
  const file = event.target.files[0];

  // Kosongkan sebelumnya
  fileNameDisplay.textContent = "";

  if (file) {
    fileNameDisplay.textContent = `File terpilih: ${file.name}`;

    const reader = new FileReader();
    reader.onload = function(e) {
      imagePreview.src = e.target.result;
      imagePreview.classList.remove("hidden"); // Tampilkan gambar
    };
    reader.readAsDataURL(file);
  }
}

fileInput.addEventListener("change", handleFileChange);