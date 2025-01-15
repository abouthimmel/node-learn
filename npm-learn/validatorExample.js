var validator = require('validator');

// mengecek apakah string adalah emal atau bukan
const example = validator.isEmail('example@gmail.com'); // output nya adalah true
// jika benar, maka akan keluar true, jika salah maka false
const example1 = validator.isEmail('example@gmail.c'); // output nya adalah false
console.log(example);
console.log(example1);

// mengecek apakah no telpon ini benar dari negara ini
const phone = validator.isMobilePhone('012131232','id-ID');
console.log(phone);