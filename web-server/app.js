// Import modul bawaan Node.js untuk membuat server dan membaca file
const http = require('http'); // Modul untuk membuat server HTTP
const fs = require('fs'); // Modul untuk membaca file di sistem

// Membuat server
http.createServer((req, res) => {
    // Fungsi untuk membaca file HTML dan mengembalikannya sebagai respons
    const renderHTML = (filePath) => {
        // Membaca file secara asinkron
        fs.readFile(filePath, (err, data) => {
            if (err) {
                // Jika file tidak ditemukan atau terjadi error
                res.writeHead(404, { 'Content-Type': 'text/plain' }); // Mengatur status 404 dan tipe konten teks biasa
                res.end('Error: File not found!'); // Kirim pesan error
            } else {
                // Jika file berhasil ditemukan
                res.writeHead(200, { 'Content-Type': 'text/html' }); // Mengatur status 200 dan tipe konten HTML
                res.end(data); // Kirim isi file sebagai respons
            }
        });
    };

    // Logika untuk menentukan file HTML yang akan dikembalikan berdasarkan URL
    if (req.url === '/about') {
        // Jika pengguna mengakses URL "/about"
        renderHTML('about.html'); // Baca file "about.html" dan kirimkan
    } else if (req.url === '/contact') {
        // Jika pengguna mengakses URL "/contact"
        renderHTML('contact.html'); // Baca file "contact.html" dan kirimkan
    } else {
        // Untuk semua URL lainnya (termasuk "/")
        renderHTML('index.html'); // Baca file "index.html" dan kirimkan
    }
})
// Menjalankan server pada port 3000
.listen(3000, () => {
    console.log('Server is running on http://localhost:3000');
});