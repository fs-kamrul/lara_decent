//-- Notice Board Page --//
function filterNotices() {
    let filterValue = document.getElementById('filterDropdown').value;
    let noticeItems = document.querySelectorAll('.notice-item');

    noticeItems.forEach(item => {
        let department = item.getAttribute('data-department');
        if (filterValue === 'all' || department.includes(filterValue)) {
            item.style.display = '';
        } else {
            item.style.display = 'none';
        }
    });
}

// Function to search notices by title
function searchNotices() {
    let input = document.getElementById('searchBox').value.toLowerCase();
    let noticeItems = document.querySelectorAll('.notice-item');

    noticeItems.forEach(item => {
        let title = item.querySelector('.notice-title').textContent.toLowerCase();
        if (title.includes(input)) {
            item.style.display = '';
        } else {
            item.style.display = 'none';
        }
    });
}
//-- Notice Board Page --//

// Function to toggle single column layout
function toggleSingleColumnLayout() {
    const noticeContainer = document.getElementById('noticeContainer');
    
    // Add the single-column class
    noticeContainer.classList.add('.single-column');
}

// Example: search or filter logic
document.getElementById('searchBox').addEventListener('input', function() {
    // Perform your search or filter logic here
    // After applying the filter or search, call the function to switch to single-column
    toggleSingleColumnLayout();
});