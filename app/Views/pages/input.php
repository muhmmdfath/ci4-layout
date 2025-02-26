<?= $this->extend('/layout/page_layout') ?>

<?= $this->section('content') ?>

<div class="shadow bg-white p-4 rounded-xl shadow-lg overflow-auto basis-md">
  <!-- Add Item Button -->
  <a href="#" id="addItemButton" class="button-container shadow-lg">
    <div class="button-icon">+</div>
    <span class="button-text">Add Item</span>
  </a>

  <!-- Selected Items Banner - initially hidden -->
  <div id="selectedItemsBanner"
    class="hidden flex justify-between items-center bg-teal-50 border border-teal-200 px-4 py-3 rounded-md mt-5 mb-2">
    <div class="flex items-center">
      <span class="font-medium text-teal-700" id="selectedCount">0</span>
      <span class="ml-1 text-teal-700">item(s) selected</span>
    </div>
    <div class="flex space-x-2">
      <button
        class="text-teal-600 hover:text-teal-800 font-medium text-sm px-2 py-1 rounded hover:bg-teal-100 transition-colors duration-200">
        Edit
      </button>
      <button
        class="text-red-600 hover:text-red-800 font-medium text-sm px-2 py-1 rounded hover:bg-red-100 transition-colors duration-200">
        Delete
      </button>
      <button id="clearSelection"
        class="text-gray-600 hover:text-gray-800 font-medium text-sm px-2 py-1 rounded hover:bg-gray-100 transition-colors duration-200">
        Clear
      </button>
    </div>
  </div>

  <!-- Table -->
  <table class="w-full text-sm text-left text-gray-800 border-separate border-spacing-0 mt-5 shadow-md rounded-lg">
    <thead
      class="raleway-semibold text-20 text-white uppercase bg-gradient-to-r from-teal-400 to-teal-500 sticky top-0 z-10">
      <tr>
        <th scope="col" class="px-4 py-3 rounded-tl-lg cursor-pointer group" data-sort="id">
          <div class="flex items-center">
            ID
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 opacity-0 group-hover:opacity-100" fill="none"
              viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4" />
            </svg>
          </div>
        </th>
        <th scope="col" class="px-4 py-3 cursor-pointer group" data-sort="name">
          <div class="flex items-center">
            Name
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 opacity-0 group-hover:opacity-100" fill="none"
              viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4" />
            </svg>
          </div>
        </th>
        <th scope="col" class="px-4 py-3 hidden sm:table-cell cursor-pointer group" data-sort="email">
          <div class="flex items-center">
            Email
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 opacity-0 group-hover:opacity-100" fill="none"
              viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4" />
            </svg>
          </div>
        </th>
        <th scope="col" class="px-4 py-3 hidden md:table-cell cursor-pointer group" data-sort="role">
          <div class="flex items-center">
            Role
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 opacity-0 group-hover:opacity-100" fill="none"
              viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4" />
            </svg>
          </div>
        </th>
        <th scope="col" class="px-4 py-3 rounded-tr-lg cursor-pointer group" data-sort="status">
          <div class="flex items-center">
            Status
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 opacity-0 group-hover:opacity-100" fill="none"
              viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4" />
            </svg>
          </div>
        </th>
      </tr>
    </thead>
    <tbody class="bg-white" id="tableBody">
      <tr class="hover:text-[#38b2ac] hover:scale-100 hover:shadow-lg transition-all duration-200 rounded-lg">
        <td class="px-4 py-3 font-medium">1</td>
        <td class="px-4 py-3">John Doe</td>
        <td class="px-4 py-3 hidden sm:table-cell">john.doe@example.com</td>
        <td class="px-4 py-3 hidden md:table-cell">Admin</td>
        <td class="px-4 py-3">
          <span class="inline-block px-2 py-1 text-xs font-semibold text-green-800 bg-green-100 rounded-full">
            Active
          </span>
        </td>
      </tr>
      <tr class="hover:text-[#38b2ac] hover:scale-100 hover:shadow-lg transition-all duration-200 rounded-lg">
        <td class="px-4 py-3 font-medium">2</td>
        <td class="px-4 py-3">Jane Smith</td>
        <td class="px-4 py-3 hidden sm:table-cell">jane.smith@example.com</td>
        <td class="px-4 py-3 hidden md:table-cell">User</td>
        <td class="px-4 py-3">
          <span class="inline-block px-2 py-1 text-xs font-semibold text-red-800 bg-red-100 rounded-full">
            Inactive
          </span>
        </td>
      </tr>
      <tr class="hover:text-[#38b2ac] hover:scale-100 hover:shadow-lg transition-all duration-200 rounded-lg">
        <td class="px-4 py-3 font-medium rounded-bl-lg">3</td>
        <td class="px-4 py-3">Bob Johnson</td>
        <td class="px-4 py-3 hidden sm:table-cell">bob.johnson@example.com</td>
        <td class="px-4 py-3 hidden md:table-cell">Editor</td>
        <td class="px-4 py-3 rounded-br-lg">
          <span class="inline-block px-2 py-1 text-xs font-semibold text-green-800 bg-green-100 rounded-full">
            Active
          </span>
        </td>
      </tr>
      <tr class="hover:text-[#38b2ac] hover:scale-100 hover:shadow-lg transition-all duration-200 rounded-lg">
        <td class="px-4 py-3 font-medium rounded-bl-lg">4</td>
        <td class="px-4 py-3">Bob Johnson</td>
        <td class="px-4 py-3 hidden sm:table-cell">bob.johnson@example.com</td>
        <td class="px-4 py-3 hidden md:table-cell">Editor</td>
        <td class="px-4 py-3 rounded-br-lg">
          <span class="inline-block px-2 py-1 text-xs font-semibold text-green-800 bg-green-100 rounded-full">
            Active
          </span>
        </td>
      </tr>
      <tr class="hover:text-[#38b2ac] hover:scale-100 hover:shadow-lg transition-all duration-200 rounded-lg">
        <td class="px-4 py-3 font-medium rounded-bl-lg">5</td>
        <td class="px-4 py-3">Bob Johnson</td>
        <td class="px-4 py-3 hidden sm:table-cell">bob.johnson@example.com</td>
        <td class="px-4 py-3 hidden md:table-cell">Editor</td>
        <td class="px-4 py-3 rounded-br-lg">
          <span class="inline-block px-2 py-1 text-xs font-semibold text-green-800 bg-green-100 rounded-full">
            Active
          </span>
        </td>
      </tr>
      <tr class="hover:text-[#38b2ac] hover:scale-100 hover:shadow-lg transition-all duration-200 rounded-lg">
        <td class="px-4 py-3 font-medium rounded-bl-lg">6</td>
        <td class="px-4 py-3">Bob Johnson</td>
        <td class="px-4 py-3 hidden sm:table-cell">bob.johnson@example.com</td>
        <td class="px-4 py-3 hidden md:table-cell">Editor</td>
        <td class="px-4 py-3 rounded-br-lg">
          <span class="inline-block px-2 py-1 text-xs font-semibold text-green-800 bg-green-100 rounded-full">
            Active
          </span>
        </td>
      </tr>
    </tbody>
  </table>

  <!-- Pagination -->
  <div class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6">
    <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
      <div>
        <p class="text-sm text-gray-700">
          Showing
          <span class="font-medium" id="showingStart">1</span>
          to
          <span class="font-medium" id="showingEnd">5</span>
          of
          <span class="font-medium" id="totalItems">0</span>
          results
        </p>
      </div>
      <div class="pagination-container">
        <!-- Pagination buttons will be generated by JavaScript here -->
      </div>
    </div>
  </div>
</div>

<?= $this->include('pages/input_form');?>

<script src="<?= base_url('assets/js/input.js'); ?>"></script>

<?= $this->endSection() ?>
