<aside id="sidebar"
  class="bg-teal-500 m-2 mb-2 w-16 rounded-lg fixed top-0 left-0 flex flex-col py-4 z-50 h-screen md:h-[50vh]">
  <!-- Existing sidebar content -->
  <!-- Header dengan Toggle dan Logo -->
  <div class="px-3 flex items-center">
    <button id="toggleSidebar" class="bg-white rounded-full w-10 h-10 flex items-center justify-center flex-shrink-0">
      <svg class="w-6 h-6 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12h16M4 6h16M4 18h16" />
      </svg>
    </button>
    <span id="logoText" class="text-white font-semibold text-lg">Logo</span>
  </div>

  <!-- Menu Navigasi -->
  <nav class="space-y-4 flex-grow px-3 mt-8">
    <!-- Existing menu items -->
    <a href="<?= base_url('dashboard') ?>" class="menu-item flex items-center w-full bg-white/10 rounded-lg p-2 hover:bg-teal-400 cursor-pointer
      <?= ($_SERVER['REQUEST_URI'] == '/dashboard') ? 'active' : '' ?>">
      <svg class="w-6 h-6 text-white flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
      </svg>
      <span class="menu-text text-white">Dashboard</span>
    </a>


    <a href="<?= base_url('input') ?>"
      class="menu-item flex items-center w-full bg-white/10 rounded-lg p-2 hover:bg-teal-400 cursor-pointer <?= ($_SERVER['REQUEST_URI'] == '/input') ? 'active' : '' ?>">
      <svg class="w-6 h-6 text-white flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
      </svg>
      <span class="menu-text text-white">Messages</span>
    </a>
  </nav>

  <!-- Toggle Arrow -->
  <button id="sidebarArrow"
    class="absolute right-0 top-1/2 transform -translate-y-1/2 -translate-x-1/2 bg-white rounded-full w-6 h-6 flex items-center justify-center shadow-md">
    <svg id="arrowIcon" class="w-4 h-4 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
    </svg>
  </button>
</aside>
<script src="<?= base_url('assets/js/sidebar.js'); ?>"></script>
