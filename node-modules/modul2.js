// simpan require ke dalam variabel
const modul1 = require('./modul1');

// jika ingin mengambil dari modul sebelah, harus di awali variabel yg value nya require ke modul tsb
// sebagai contoh = console.log(namaModul.var);
console.log(modul1.PI);
console.log(modul1.mahasiswa.lengkapnya())