const categories = [
  { name: "bath", label: "Fürdőszoba" },
  { name: "ceiling", label: "Mennyezet" },
  { name: "floor", label: "Padló" },
  { name: "kitchen", label: "Konyha" },
  { name: "living", label: "Nappali" },
  { name: "outdoor", label: "Kültér" },
  { name: "room", label: "Szobák" },
  { name: "work_in_progress", label: "Folyamatban" },
];

const categoryContainer = document.getElementById("categoryCards");
const galleryImages = document.getElementById("galleryImages");
const modalImage = document.getElementById("modalImage");

function createCategoryCards() {
  categories.forEach((category) => {
    const imgPath = `assets/images/workphotos/${category.name}/${category.name}_1.jpg`;
    const card = document.createElement("div");
    card.className = "col-6 col-md-4 col-lg-3";
    card.innerHTML = `
      <div class="card shadow-sm" onclick="loadGallery('${category.name}')">
        <img src="${imgPath}" class="card-img-top" alt="${category.label}" style="object-fit: cover; height: 250px;">
        <div class="card-body text-center">
          <h6 class="card-title mb-0">${category.label}</h6>
        </div>
      </div>
    `;
    categoryContainer.appendChild(card);
  });
}

function loadGallery(folder) {
  galleryImages.innerHTML = "";
  const maxImages = 50;

  for (let i = 1; i <= maxImages; i++) {
    const imgPath = `assets/images/workphotos/${folder}/${folder}_${i}.jpg`;
    const img = new Image();
    img.src = imgPath;
    img.alt = `${folder} ${i}`;
    img.onload = () => {
      const col = document.createElement("div");
      col.className = "col-6 col-md-4 col-lg-3 mb-4";
      col.innerHTML = `
        <img src="${imgPath}" class="w-100 rounded shadow-sm" style="object-fit: cover; height: 250px; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showModal('${imgPath}')">
      `;
      galleryImages.appendChild(col);
    };
    img.onerror = () => {};
  }
}

function showModal(src) {
  modalImage.src = src;
}

createCategoryCards();
