// public/js/katalogprodukhukum.js

document.addEventListener('DOMContentLoaded', function () {
    const searchBox = document.querySelector('.search-box');
    const searchButton = document.querySelector('.search-button');
    const tableRows = document.querySelectorAll('.product-table tbody tr');

    searchButton.addEventListener('click', function () {
        const searchTerm = searchBox.value.toLowerCase();
        tableRows.forEach(row => {
            const rowText = row.innerText.toLowerCase();
            if (rowText.includes(searchTerm)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    });

    // Action buttons
    document.querySelectorAll('.action-button').forEach(button => {
        button.addEventListener('click', function () {
            const action = button.classList[1]; // Get the second class which indicates the action
            const row = button.closest('tr'); // Get the closest row

            switch (action) {
                case 'trayek':
                    alert('Trayek button clicked for row ' + row.rowIndex);
                    break;
                case 'update':
                    alert('Update button clicked for row ' + row.rowIndex);
                    break;
                case 'lihat':
                    alert('Lihat button clicked for row ' + row.rowIndex);
                    break;
                case 'hapus':
                    if (confirm('Are you sure you want to delete this item?')) {
                        row.remove();
                    }
                    break;
                case 'edit':
                    alert('Edit button clicked for row ' + row.rowIndex);
                    break;
                default:
                    console.log('Unknown action: ' + action);
            }
        });
    });
});
