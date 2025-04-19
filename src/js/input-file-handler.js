function handleFileChange(event) {
  const fileNameDisplay = document.getElementById("file-name");
  const previewContainer = document.getElementById("image-preview");
  const file = event.target.files[0];

  // Kosongkan sebelumnya
  fileNameDisplay.textContent = "";
  previewContainer.innerHTML = "";

  if (file) {
    fileNameDisplay.textContent = `File terpilih: ${file.name}`;

    const reader = new FileReader();
    reader.onload = function(e) {
      const img = document.createElement("img");
      img.src = e.target.result;
      img.alt = "Preview Gambar";
      img.className = "mt-1 w-full rounded-lg border border-[--color-accent2]";
      previewContainer.appendChild(img);
    };
    reader.readAsDataURL(file);
  }
}