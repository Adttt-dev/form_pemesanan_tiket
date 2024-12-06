document.addEventListener('DOMContentLoaded', function() {
    const namaInput = document.getElementById('nama');
    const namaError = document.getElementById('namaError');
    const ticketForm = document.getElementById('ticketForm');

    namaInput.addEventListener('input', function() {
        // Regex untuk memeriksa apakah input hanya berisi huruf dan spasi
        const namaRegex = /^[A-Za-z\s]+$/;
        
        if (!namaRegex.test(namaInput.value) && namaInput.value !== '') {
            namaError.style.display = 'block';
            namaInput.classList.add('is-invalid');
        } else {
            namaError.style.display = 'none';
            namaInput.classList.remove('is-invalid');
        }
    });

    ticketForm.addEventListener('submit', function(event) {
        // Regex untuk memeriksa apakah input hanya berisi huruf dan spasi
        const namaRegex = /^[A-Za-z\s]+$/;
        
        if (!namaRegex.test(namaInput.value)) {
            event.preventDefault();
            namaError.style.display = 'block';
            namaInput.classList.add('is-invalid');
        }
    });
});