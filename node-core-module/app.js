// core module
// file system
const fs = require('fs');

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

const { createInterface } = require('node:readline/promises');
const rl = createInterface({
  input: process.stdin,
  output: process.stdout,
});

rl.question('Siapa namamu? ')
  .then((nama) => {
    console.log(`Halo, ${nama}!`);
  })
  .finally(() => rl.close());