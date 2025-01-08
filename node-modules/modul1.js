function cetakNama(nama) {
    return `haloo, nama saya ${nama}`
};

const PI = 3.14

const mahasiswa = {
    nama: 'Mulya Ramadhan',
    jurusan: 'Teknik Informatika',
    lengkapnya: function(){
        return `halooo, nama saya ${this.nama}, jurusan ${this.jurusan}`
    }
}


// jika ingin mengekspor lebih dari 1, maka lakukan ini

// module.exports = {
//     cetakNama: cetakNama,
//     PI: PI,
//     mahasiswa: mahasiswa
// }
//  jika nama key dan value nya sama, maka bisa di ketik seperti ini:
module.exports = {cetakNama, PI, mahasiswa}