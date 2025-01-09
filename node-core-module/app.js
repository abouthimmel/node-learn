// core module
// file system
const { setEngine } = require('crypto');
const fs = require('fs');
const { Readline } = require('readline/promises');

// menuliskan string ke file (synchronus)
// try{
//     fs.writeFileSync('data/tes.txt', 'Hello World secara synchrous')
// } catch(e){
//     console.log(e)
// }

// menuliskan string ke file (asynchronus)
// fs.writeFile('data/tes.txt', 'Hello World secara asynchronus', (e) => {
//     console.log(e);
// });

//membaca isi file (synchronus)
// const data = fs.readFileSync('data/tes.txt', 'utf-8');

// console.log(data);  jika seperti ini saja, maka yg muncul adalah buffer nya, bukan string nya
// bisa pakai console.log(data.toString)    Atau di belakang path nya di tambahkan utf-8 

// console.log(data)


//membaca isi file (asynchronus)
// const data = fs.readFile('data/tes.txt', 'utf-8', (err, data) => {
//     if (err) throw err;
//     console.log(data)
// }

// const { createInterface } = require('node:readline/promises');
// const rl = createInterface({
//   input: process.stdin,
//   output: process.stdout,
// });

// rl.question('Siapa namamu? ')
//   .then((nama) => {
//     console.log(`Halo, ${nama}!`);
//   })
//   .finally(() => rl.close()); 
// memasukan input di console dari user, dan di callback




// jika ingin ada 2 pertanyaan atau lebih di console
// const readline = require('node:readline/promises');

// const rl = readline.createInterface({
//   input: process.stdin,
//   output: process.stdout,
// });

// async function main() {
//   try{
//     const nama = await rl.question('Masukan nama anda: ');
//     const saldo = await rl.question('Masukan saldo anda: ');

//     console.log(`halo ${nama}, saldo anda RP ${saldo}`);
//   } catch (err) {
//     console.log(err);
//   } finally {
//     rl.close();
//   }
// }

// main()




// memasukan input dari console ke dalam file json

// // modul untuk menamgbil input dari pengguna secara interaktif
// const {createInterface} = require('node:readline/promises');
// // membuat antarmuka untuk input dari terminal
// const rl = createInterface({
//   input: process.stdin,
//   output: process.stdout,
// });

// // asynchronus function, bisa menggunakan await untuk menunggu hasil dari input
// async function main(){
//   try{ // mengambil input dari pengguna
//   const nama = await rl.question('Masukan nama anda = ');
//   const univ = await rl.question('Masukan nama universitas = ');
//   const jurusan = await rl.question('Masukan jurusan anda = ');
//   const semester = await rl.question('Masukan semester sekarang = ');

//   // var mahasiswa di buat sebagai objek yg menyimpan input dari user
//   const mahasiswa = {nama, univ, jurusan, semester};
//   // membaca file json dalam bentuk teks
//   const fileBuffer = fs.readFileSync('data/data.json');
//   // mengubah teks json menjadi array js
//   const strFile = JSON.parse(fileBuffer);
//   // menambahkan objek mahasiswa (data baru) ke array strFile
//   strFile.push(mahasiswa);
//   // mengubah array (mahasiswa) kembali menjadi teks json
//   // dan menyimpan data baru(yg sudah di tambahkan) ke dalam file data.json
//   fs.writeFileSync('data/data.json', JSON.stringify(mahasiswa));
//   } catch (err) {
//     console.error(err);
//   } finally {
//     rl.close()
//   }
// }

// main()


// const {createInterface} = require('node:readline/promises');
// const rl = createInterface({
//   input: process.stdin,
//   output: process.stdout,
// });

// async function main() {
//   try{
//     const nama = await rl.question('Masukan nama anda = ');
//     const univ = await rl.question('Masukan nama universitas anda = ');
//     const jurusan = await rl.question('Masukan jurusan anda');
//     const semester = await rl.question('Masukan semester anda = ');

//     const mahasiswa = {nama, univ, jurusan, semester};
//     const fileBuffer = fs.readFileSync('data/data.json', 'utf8');
//     const newData = JSON.parse(fileBuffer);

//    newData.push(mahasiswa);
//    fs.writeFileSync('data/data.json', JSON.stringify(mahasiswa));
    
//   } catch (e) {
//     console.error(e);
//   } finally{
//     rl.close()
//   }
// }

// main()


const { createInterface } = require('node:readline/promises'); // Modul untuk input pengguna

const rl = createInterface({
  input: process.stdin,
  output: process.stdout,
});

async function main() {
  try {
    // Meminta input dari pengguna
    const nama = await rl.question('Masukan nama anda: ');
    const univ = await rl.question('Masukan universitas anda: ');
    const jurusan = await rl.question('Masukan jurusan anda: ');
    const semester = await rl.question('Masukan semester anda: ');

    // Membuat objek mahasiswa dari data input
    const mahasiswa = { nama, univ, jurusan, semester };

    // Membaca file JSON dan memastikan selalu berupa array
    let data = [];
    try {
      const fileContent = fs.readFileSync('data/data.json', 'utf8');
      data = JSON.parse(fileContent); // Mengubah JSON menjadi array
    } catch (err) {
      console.log('File belum ada atau kosong, akan dibuat baru.');
    }

    // Menambahkan data baru ke array
    data.push(mahasiswa);

    // Menyimpan array ke file JSON
    fs.writeFileSync('data/data.json', JSON.stringify(data, null, 2));
    console.log('Data berhasil disimpan!');
  } catch (err) {
    console.error('Terjadi kesalahan:', err.message);
  } finally {
    rl.close(); // Menutup interface readline
  }
}

main();
