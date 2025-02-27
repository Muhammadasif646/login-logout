function toggleNavbar() {
    let nav = document.querySelector(".navbar");
    const toggleButton = document.querySelector(".toggle");
    const isCollapsed = nav.classList.contains("collapsed");
  
    // Toggle the navbar collapse state
    nav.classList.toggle("collapsed", !isCollapsed);
  
    // Change the toggle button icon text based on the navbar state
    if (isCollapsed) {
      toggleButton.innerHTML =
        '<span class="material-symbols-outlined">chevron_left</span>';
    } else {
      toggleButton.innerHTML =
        '<span class="material-symbols-outlined">chevron_right</span>';
    }
  }