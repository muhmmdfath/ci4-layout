<?= $this->extend('/layout/page_layout') ?>

<?= $this->section('content') ?>

<!-- <div class="col-span-1 space-y-4 mt-8"> -->
<table class="w-full text-sm text-left text-gray-800 border-separate border-spacing-0 mt-10 shadow-md rounded-lg">
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
  </tbody>
</table>
<!-- </div> -->

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
      <!-- Tombol pagination akan di-generate oleh JavaScript di sini -->
    </div>
  </div>
</div>



<script>
document.addEventListener('DOMContentLoaded', function() {
  let currentPage = 1;
  const rowsPerPage = 5;
  let tableData = [];
  let sortColumn = 'id';
  let sortDirection = 'asc';
  let selectedRows = new Set();

  // Add custom CSS for checkboxes
  const style = document.createElement('style');
  style.textContent = `
    /* Custom checkbox styling */
    input[type="checkbox"] {
      appearance: none;
      -webkit-appearance: none;
      width: 18px;
      height: 18px;
      border: 2px solid #d1d5db;
      border-radius: 4px;
      outline: none;
      cursor: pointer;
      position: relative;
      transition: all 0.2s ease;
      background-color: white;
    }

    input[type="checkbox"]:checked {
      background-color: #38b2ac;
      border-color: #38b2ac;
    }

    input[type="checkbox"]:checked::after {
      content: '';
      position: absolute;
      left: 5px;
      top: 2px;
      width: 6px;
      height: 10px;
      border: solid white;
      border-width: 0 2px 2px 0;
      transform: rotate(45deg);
    }

    input[type="checkbox"]:hover {
      border-color: #38b2ac;
    }

    input[type="checkbox"]:focus {
      box-shadow: 0 0 0 2px rgba(56, 178, 172, 0.3);
    }

    /* Indeterminate state styling */
    input[type="checkbox"]:indeterminate {
      background-color: #38b2ac;
      border-color: #38b2ac;
    }

    input[type="checkbox"]:indeterminate::after {
      content: '';
      position: absolute;
      left: 3px;
      top: 8px;
      width: 10px;
      height: 2px;
      background-color: white;
    }
  `;
  document.head.appendChild(style);

  // Initialize data from existing table rows
  function initTableData() {
    const rows = document.querySelectorAll('#tableBody tr');
    tableData = [];
    rows.forEach(row => {
      const cells = row.querySelectorAll('td');
      const statusSpan = cells[4].querySelector('span');
      tableData.push({
        id: parseInt(cells[0].textContent),
        name: cells[1].textContent,
        email: cells[2].textContent,
        role: cells[3].textContent,
        status: statusSpan.textContent.trim(),
        selected: false
      });
    });
    document.getElementById('tableBody').innerHTML = '';
  }

  // Add checkbox to table header
  function addHeaderCheckbox() {
    const headerRow = document.querySelector('thead tr');
    const checkboxCell = document.createElement('th');
    checkboxCell.className = 'px-4 py-3 rounded-tl-lg';
    checkboxCell.innerHTML = `
      <div class="flex items-center justify-center">
        <input id="selectAll" type="checkbox" class="w-5 h-5 text-teal-500 border-gray-300 rounded focus:ring-teal-400">
      </div>
    `;

    // Move rounded-tl-lg class from first column to checkbox column
    const firstColumn = headerRow.querySelector('th:first-child');
    firstColumn.classList.remove('rounded-tl-lg');

    headerRow.insertBefore(checkboxCell, headerRow.firstChild);

    // Add event listener for select all checkbox
    document.getElementById('selectAll').addEventListener('change', function(e) {
      const isChecked = e.target.checked;
      tableData.forEach(row => {
        row.selected = isChecked;
      });
      selectedRows = isChecked ? new Set(tableData.map(row => row.id)) : new Set();
      renderTable();
    });
  }

  // Render table with current page data
  function renderTable() {
    const start = (currentPage - 1) * rowsPerPage;
    const end = start + rowsPerPage;
    const paginatedData = tableData.slice(start, end);
    const tbody = document.getElementById('tableBody');

    tbody.innerHTML = paginatedData.map(row => `
      <tr class="hover:text-[#38b2ac] hover:scale-100 hover:shadow-lg transition-all duration-200 rounded-lg">
        <td class="px-4 py-3">
          <div class="flex items-center justify-center">
            <input type="checkbox" data-id="${row.id}" class="row-checkbox w-5 h-5 text-teal-500 border-gray-300 rounded focus:ring-teal-400"
              ${row.selected || selectedRows.has(row.id) ? 'checked' : ''}>
          </div>
        </td>
        <td class="px-4 py-3 font-medium">${row.id}</td>
        <td class="px-4 py-3">${row.name}</td>
        <td class="px-4 py-3 hidden sm:table-cell">${row.email}</td>
        <td class="px-4 py-3 hidden md:table-cell">${row.role}</td>
        <td class="px-4 py-3">
          <span class="inline-block px-2 py-1 text-xs font-semibold ${
            row.status === 'Active'
              ? 'text-green-800 bg-green-100'
              : 'text-red-800 bg-red-100'
          } rounded-full">
            ${row.status}
          </span>
        </td>
      </tr>
    `).join('');

    // Add event listeners for row checkboxes
    document.querySelectorAll('.row-checkbox').forEach(checkbox => {
      checkbox.addEventListener('change', function(e) {
        const rowId = parseInt(this.getAttribute('data-id'));
        const tableRow = tableData.find(row => row.id === rowId);
        if (tableRow) {
          tableRow.selected = this.checked;
        }

        if (this.checked) {
          selectedRows.add(rowId);
        } else {
          selectedRows.delete(rowId);
        }

        // Update select all checkbox state
        updateSelectAllCheckbox();
      });
    });

    // Add ripple effect to checkboxes
    document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
      checkbox.addEventListener('click', function(e) {
        const rect = this.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;

        const ripple = document.createElement('span');
        ripple.style.position = 'absolute';
        ripple.style.width = '1px';
        ripple.style.height = '1px';
        ripple.style.left = x + 'px';
        ripple.style.top = y + 'px';
        ripple.style.borderRadius = '50%';
        ripple.style.transform = 'scale(0)';
        ripple.style.backgroundColor = 'rgba(56, 178, 172, 0.3)';
        ripple.style.animation = 'ripple 0.4s linear';

        this.style.position = 'relative';
        this.style.overflow = 'hidden';
        this.appendChild(ripple);

        setTimeout(() => {
          ripple.remove();
        }, 500);
      });
    });

    // Update showing info
    document.getElementById('showingStart').textContent = start + 1;
    document.getElementById('showingEnd').textContent = Math.min(end, tableData.length);
    document.getElementById('totalItems').textContent = tableData.length;
  }

  // Update select all checkbox state based on individual selections
  function updateSelectAllCheckbox() {
    const selectAllCheckbox = document.getElementById('selectAll');
    const currentPageData = getCurrentPageData();
    const allSelected = currentPageData.every(row => row.selected || selectedRows.has(row.id));
    const someSelected = currentPageData.some(row => row.selected || selectedRows.has(row.id));

    selectAllCheckbox.checked = allSelected;
    selectAllCheckbox.indeterminate = !allSelected && someSelected;
  }

  // Get data for the current page
  function getCurrentPageData() {
    const start = (currentPage - 1) * rowsPerPage;
    const end = start + rowsPerPage;
    return tableData.slice(start, end);
  }

  // Sort data
  function sortData(column) {
    if (sortColumn === column) {
      sortDirection = sortDirection === 'asc' ? 'desc' : 'asc';
    } else {
      sortColumn = column;
      sortDirection = 'asc';
    }

    tableData.sort((a, b) => {
      const valA = column === 'id' ? a[column] : a[column].toLowerCase();
      const valB = column === 'id' ? b[column] : b[column].toLowerCase();

      if (valA < valB) return sortDirection === 'asc' ? -1 : 1;
      if (valA > valB) return sortDirection === 'asc' ? 1 : -1;
      return 0;
    });

    currentPage = 1;
    renderTable();
    updatePagination();
  }

  // Update pagination controls
  function updatePagination() {
    const totalPages = Math.ceil(tableData.length / rowsPerPage);
    const container = document.querySelector('.pagination-container');

    let html = `
      <nav class="isolate inline-flex -space-x-px rounded-md shadow-xs" aria-label="Pagination">
        <a href="#" class="pagination-previous relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-gray-300 ring-inset hover:bg-gray-50 ${
          currentPage === 1 ? 'cursor-not-allowed opacity-50' : ''
        }">
          <span class="sr-only">Previous</span>
          <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M11.78 5.22a.75.75 0 0 1 0 1.06L8.06 10l3.72 3.72a.75.75 0 1 1-1.06 1.06l-4.25-4.25a.75.75 0 0 1 0-1.06l4.25-4.25a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd"/>
          </svg>
        </a>
    `;

    for (let i = 1; i <= totalPages; i++) {
      html += `
        <a href="#" class="pagination-page relative inline-flex items-center px-4 py-2 text-sm font-semibold ${
          i === currentPage
            ? 'bg-[#38b2ac] text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#38b2ac]'
            : 'text-gray-900 ring-1 ring-gray-300 ring-inset hover:bg-gray-50'
        }">${i}</a>
      `;
    }

    html += `
        <a href="#" class="pagination-next relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 ring-1 ring-gray-300 ring-inset hover:bg-gray-50 ${
          currentPage === totalPages ? 'cursor-not-allowed opacity-50' : ''
        }">
          <span class="sr-only">Next</span>
          <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"/>
          </svg>
        </a>
      </nav>
    `;

    container.innerHTML = html;

    // Add event listeners
    document.querySelector('.pagination-previous')?.addEventListener('click', e => {
      e.preventDefault();
      if (currentPage > 1) {
        currentPage--;
        renderTable();
        updatePagination();
        updateSelectAllCheckbox();
      }
    });

    document.querySelector('.pagination-next')?.addEventListener('click', e => {
      e.preventDefault();
      if (currentPage < totalPages) {
        currentPage++;
        renderTable();
        updatePagination();
        updateSelectAllCheckbox();
      }
    });

    document.querySelectorAll('.pagination-page').forEach(btn => {
      btn.addEventListener('click', e => {
        e.preventDefault();
        currentPage = parseInt(btn.textContent);
        renderTable();
        updatePagination();
        updateSelectAllCheckbox();
      });
    });
  }

  // Add animation keyframes for ripple effect
  const rippleStyle = document.createElement('style');
  rippleStyle.textContent = `
    @keyframes ripple {
      0% {
        transform: scale(0);
        opacity: 1;
      }
      100% {
        transform: scale(40);
        opacity: 0;
      }
    }
  `;
  document.head.appendChild(rippleStyle);

  // Initialize table
  addHeaderCheckbox();
  initTableData();
  renderTable();
  updatePagination();

  // Add sorting event listeners
  document.querySelectorAll('th[data-sort]').forEach(th => {
    th.addEventListener('click', () => {
      const column = th.getAttribute('data-sort');
      sortData(column);

      // Update sort indicator
      th.querySelector('svg').classList.toggle('rotate-180', sortDirection === 'desc');
      document.querySelectorAll('th').forEach(otherTh => {
        if (otherTh !== th) {
          otherTh.querySelector('svg')?.classList.remove('rotate-180');
        }
      });
    });
  });
});
</script>



<?= $this->endSection() ?>
