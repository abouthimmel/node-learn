// const fs = require('fs'); // core module 
// const cetakNama = require('./coba'); // local module
// const NPM = require('NPM'); //Third Party Module atau NPM akan tersimpan di dalam folder node/modules



// memanggil file lain
const cetakNama = require('./coba')
require('./coba');
console.log('hallo dunia');

console.log(cetakNama('mulya'))


// kesimpulannya 

//node js bisa memanggil dari file lain, tapi tidak sembarangan karna node js itu menganut module
// require itu untuk memanggil file lain
// nah untuk yg console.log(cetakNama('mulya')), function nya ada di file coba.js, nah untuk bisa
// jalan di file index.js, function yg di coba js harus di ekspor terlebih dahulu
// dengan module.exports = cetakNama;