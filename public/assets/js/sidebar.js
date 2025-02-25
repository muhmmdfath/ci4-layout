document.addEventListener("DOMContentLoaded", function () {
  const sidebar = document.getElementById("sidebar");
  const mainContent = document.getElementById("mainContent");
  const toggleSidebar = document.getElementById("toggleSidebar");
  const sidebarArrow = document.getElementById("sidebarArrow");
  const arrowIcon = document.getElementById("arrowIcon");
  const navbar = document.querySelector("nav");
  const hidenav = document.getElementById("hide");
  const userMenuButton = document.getElementById("userMenuButton");
  const userDropdown = document.getElementById("userDropdown");

  // Fungsi untuk mengatur state sidebar (expand/collapse)
  function toggleSidebarState() {
    const isExpanded = sidebar.classList.contains("sidebar-expanded");

    if (!isExpanded) {
      // Expand sidebar
      sidebar.classList.add("sidebar-expanded");
      sidebar.classList.remove("w-16");
      sidebar.classList.add("w-64");
      hidenav.classList.add("hide");
      mainContent.style.marginLeft = "17rem";
      navbar.style.marginLeft = "17rem";
      arrowIcon.innerHTML =
        '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />';
    } else {
      // Collapse sidebar
      sidebar.classList.remove("sidebar-expanded");
      hidenav.classList.remove("hide");
      sidebar.classList.remove("w-64");
      sidebar.classList.add("w-16");
      mainContent.style.marginLeft = "5rem";
      navbar.style.marginLeft = "5rem";
      arrowIcon.innerHTML =
        '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />';
    }
  }

  // Event listener untuk tombol toggle sidebar
  toggleSidebar.addEventListener("click", toggleSidebarState);
  sidebarArrow.addEventListener("click", toggleSidebarState);

  // Toggle dropdown menu user
  userMenuButton.addEventListener("click", function (e) {
    e.stopPropagation();
    userDropdown.classList.toggle("show");
  });

  // Menutup dropdown jika klik di luar dropdown
  document.addEventListener("click", function (e) {
    if (
      !userDropdown.contains(e.target) &&
      !userMenuButton.contains(e.target)
    ) {
      userDropdown.classList.remove("show");
    }
  });

  // Menambahkan kelas 'active' ke menu yang sesuai dengan URL saat ini
  const currentPath = window.location.pathname;
  const menuItems = document.querySelectorAll(".menu-item");

  menuItems.forEach((item) => {
    const itemHref = item.getAttribute("href");

    // Tambahkan kelas 'active' jika URL cocok
    if (itemHref && itemHref === currentPath) {
      item.classList.add("active");

      // Pastikan semua elemen child (icon dan label) berubah warnanya
      const icon = item.querySelector("svg");
      const label = item.querySelector(".menu-text");

      if (icon) {
        icon.style.color = "white"; // Ubah warna icon
      }
      if (label) {
        label.style.color = "white"; // Ubah warna label
      }
    }
  });
});
