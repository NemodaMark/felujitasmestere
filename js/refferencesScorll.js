const folders = [
    "bathrooms",
    "ceiling",
    "floors",
    "Kitchen",
    "livingrooms",
    "outdoors",
    "rooms",
    "work_in_progress"
  ];
  
  const basePath = "assets/images/workphotos/";
  
  function createCategoryCards() {
    const container = document.getElementById("categoryCards");
    folders.forEach(folder => {
      const thumb = `${basePath}${folder}/${folder}_1.jpg`; // első kép
      const card = document.createElement("div");
      card.className = "col-sm-6 col-md-4 col-lg-3";
      card.innerHTML = `
        <div class="card folder-card h-100 shadow" onclick="loadGallery('${folder}')">
          <img src="${thumb}" class="card-img-top folder-thumb" alt="${folder}">
          <div class="card-body text-center">
            <h6 class="card-title text-capitalize">${folder.replaceAll('_', ' ')}</h6>
          </div>
        </div>
      `;
      container.appendChild(card);
    });
  }
  
  function loadGallery(folderName) {
    document.getElementById("categoryCards").classList.add("d-none");
    document.getElementById("galleryContainer").classList.remove("d-none");
    document.getElementById("galleryTitle").innerText = folderName.replaceAll('_', ' ');
  
    const imageGrid = document.getElementById("imageGrid");
    imageGrid.innerHTML = "";
  
    for (let i = 1; i <= 30; i++) {
      const path = `${basePath}${folderName}/${folderName}_${i}.jpg`;
      const img = new Image();
      img.src = path;
      img.onload = () => {
        const col = document.createElement("div");
        col.className = "col-6 col-md-4 col-lg-3";
        col.innerHTML = `<img src="${path}" class="image-thumb" onclick="showModal('${path}')">`;
        imageGrid.appendChild(col);
      };
    }
  }
  
  function showModal(imgSrc) {
    document.getElementById("modalImage").src = imgSrc;
    new bootstrap.Modal(document.getElementById("imageModal")).show();
  }
  
  function goBack() {
    document.getElementById("galleryContainer").classList.add("d-none");
    document.getElementById("categoryCards").classList.remove("d-none");
    document.getElementById("imageGrid").innerHTML = "";
    document.getElementById("galleryTitle").innerText = "";
  }
  
  createCategoryCards();
  