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
const {createInterface} = require('node:readline/promises')
const rl = createInterface({
  input: process.stdin,
  output: process.stdout,
});

async function  main() {
  try{
    const nama = await rl.question('Masukan nama anda: ');
    const noHp = await rl.question('Masukan noHp:   ');

    const contact = {nama, noHp};
    const fileBuffer = fs.readFileSync('data/data.json', 'utf8');
    const contacts = JSON.parse(fileBuffer);
    contacts.push(contact)

    fs.writeFileSync('data/data.json', JSON.stringify(contacts))
  } catch (err) {
    console.log(err)
  } finally{
    rl.close();
  }
}

main()