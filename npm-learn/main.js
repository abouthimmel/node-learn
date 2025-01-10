// di saat meng init sebuah npm, akan muncul package json

const { default: chalk } = require("chalk");

console.log('hello world');


// chalk adalah package yg membuat output di console kita berwarna
// menggunakan npm/package chalk
console.log(chalk.blue.bgGreen('hello world'))

// bisa mengguakan template literals
const nama = 'mulya'
const halo = `haloo, nama saya ${chalk.green(nama)}, saya berasal dari jurusan ${chalk.black.bgBlue('Teknik Infomratika')}`
console.log(halo)