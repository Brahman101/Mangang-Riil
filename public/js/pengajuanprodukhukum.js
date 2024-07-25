// public/js/pengajuanprodukhukum.js

document.addEventListener('DOMContentLoaded', (event) => {
    const searchButton = document.querySelector('.search-button');
    const searchBox = document.querySelector('.search-box');
    const tableRows = document.querySelectorAll('.product-table tbody tr');

    searchButton.addEventListener('click', () => {
        const query = searchBox.value.toLowerCase();
        tableRows.forEach(row => {
            const cells = row.querySelectorAll('td');
            const rowText = Array.from(cells).map(cell => cell.innerText.toLowerCase()).join(' ');
            if (rowText.includes(query)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    });

    const actionButtons = document.querySelectorAll('.action-button');

    actionButtons.forEach(button => {
        button.addEventListener('click', (event) => {
            const icon = event.currentTarget.querySelector('i').getAttribute('data-feather');
            switch (icon) {
                case 'search':
                    alert('Search action clicked!');
                    break;
                case 'download':
                    alert('Download action clicked!');
                    break;
                default:
                    console.log('Unknown action');
            }
        });
    });
});
