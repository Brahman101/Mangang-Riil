document.addEventListener('DOMContentLoaded', () => {

    // Validasi dan pengiriman formulir
    if (form) {
        form.addEventListener('submit', (event) => {
            event.preventDefault();

            // Validasi formulir
            const fields = form.querySelectorAll('input[type="text"]');
            let valid = true;

            fields.forEach(field => {
                if (!field.value.trim()) {
                    valid = false;
                    field.classList.add('error');
                } else {
                    field.classList.remove('error');
                }
            });

            // Menangani elemen select
            const selects = form.querySelectorAll('select');
            selects.forEach(select => {
                if (!select.value) {
                    valid = false;
                    select.classList.add('error');
                } else {
                    select.classList.remove('error');
                }
            });

            if (valid) {
                alert('Form submitted successfully!');
                form.reset();
            } else {
                alert('Please fill in all the fields.');
            }
        });
    } else {
        console.error('Form element not found.');
    }
});