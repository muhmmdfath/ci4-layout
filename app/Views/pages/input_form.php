  <!-- Form untuk Desktop -->
  <div id="desktopForm" class="hidden lg:block lg:w-2/3 ml-4 basis-80">
    <form id="itemForm" class="bg-white rounded-lg space-y-4 p-4 border border-gray-300 shadow-md">
      <div>
        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
        <input type="text" id="name" name="name" class="mt-1 block w-full px-3 py-2 border rounded-md">
      </div>
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input type="email" id="email" name="email" class="mt-1 block w-full px-3 py-2 border rounded-md">
      </div>
      <div>
        <label for="role" class="block text-sm font-medium text-gray-700">Role</label>
        <select id="role" name="role" class="mt-1 block w-full px-3 py-2 border rounded-md">
          <option value="Admin">Admin</option>
          <option value="User">User</option>
          <option value="Editor">Editor</option>
        </select>
      </div>
      <div>
        <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
        <select id="status" name="status" class="mt-1 block w-full px-3 py-2 border rounded-md">
          <option value="Active">Active</option>
          <option value="Inactive">Inactive</option>
        </select>
      </div>
      <div class="flex justify-end space-x-2">
        <button type="button" id="cancelForm"
          class="bg-gray-300 text-gray-700 px-4 py-2 rounded-md hover:bg-gray-400">Cancel</button>
        <button type="submit" class="bg-teal-500 text-white px-4 py-2 rounded-md hover:bg-teal-600">Save</button>
      </div>
    </form>
  </div>

  <!-- Modal untuk Mobile -->
  <div id="mobileModal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50">
    <div class="fixed inset-0 flex items-center justify-center p-4">
      <div class="bg-white rounded-lg p-6 w-full max-w-md">
        <form id="mobileItemForm" class="space-y-4">
          <div>
            <label for="mobileName" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" id="mobileName" name="name"
              class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-teal-500 focus:border-teal-500 sm:text-sm">
          </div>
          <div>
            <label for="mobileEmail" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" id="mobileEmail" name="email"
              class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-teal-500 focus:border-teal-500 sm:text-sm">
          </div>
          <div>
            <label for="mobileRole" class="block text-sm font-medium text-gray-700">Role</label>
            <select id="mobileRole" name="role"
              class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-teal-500 focus:border-teal-500 sm:text-sm">
              <option value="Admin">Admin</option>
              <option value="User">User</option>
              <option value="Editor">Editor</option>
            </select>
          </div>
          <div>
            <label for="mobileStatus" class="block text-sm font-medium text-gray-700">Status</label>
            <select id="mobileStatus" name="status"
              class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-teal-500 focus:border-teal-500 sm:text-sm">
              <option value="Active">Active</option>
              <option value="Inactive">Inactive</option>
            </select>
          </div>
          <div class="flex justify-end space-x-2">
            <button type="button" id="cancelMobileForm"
              class="bg-gray-300 text-gray-700 px-4 py-2 rounded-md hover:bg-gray-400">Cancel</button>
            <button type="submit" class="bg-teal-500 text-white px-4 py-2 rounded-md hover:bg-teal-600">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script>
document.addEventListener('DOMContentLoaded', function() {
  const addItemButton = document.getElementById('addItemButton');
  const desktopForm = document.getElementById('desktopForm');
  const mobileModal = document.getElementById('mobileModal');
  const cancelForm = document.getElementById('cancelForm');
  const cancelMobileForm = document.getElementById('cancelMobileForm');

  addItemButton.addEventListener('click', function() {
    if (window.innerWidth >= 1024) {
      desktopForm.classList.toggle('hidden');
    } else {
      mobileModal.classList.toggle('hidden');
    }
  });

  cancelForm.addEventListener('click', function() {
    desktopForm.classList.add('hidden');
  });

  cancelMobileForm.addEventListener('click', function() {
    mobileModal.classList.add('hidden');
  });

  document.getElementById('itemForm').addEventListener('submit', function(e) {
    e.preventDefault();
    desktopForm.classList.add('hidden');
  });

  document.getElementById('mobileItemForm').addEventListener('submit', function(e) {
    e.preventDefault();
    mobileModal.classList.add('hidden');
  });
});
  </script>
