const fs = require('fs');
const chalk = require('chalk');
const validator = require('validator');

function system(nama, gender, jurusan, sks, semester, email, noHp, nim){
const mahasiswa = {nama, gender, jurusan, sks, semester, email, noHp, nim};
let data = [];
try{
    const fileContent = fs.readFileSync('./data/mahasiswa2.json', 'utf8');
    data = JSON.parse(fileContent);
} catch (e) {
    console.log('File belum ada atau kosong, akan di buat baru');
}
const duplikat = data.find((item) => item.nama === nama);
if (duplikat) {
  console.log(chalk.red('Nama sudah terdaftar, silakan gunakan nama lain.'));
  return; // Hentikan eksekusi jika nama sudah ada
}
data.push(mahasiswa);
if(email) {
    if(!validator.isEmail(email)) {
        console.log(chalk.red('Email tidak valid'));
        return false
    };
    
}
if(noHp) {
    if(!validator.isMobilePhone(noHp, 'id-ID')){
        console.log(chalk.red('No HP Tidak Valid'));
        return false
    }
}
fs.writeFileSync('./data/mahasiswa2.json', JSON.stringify(data, null, 2));
console.log(chalk.green('Data berhasil di simpan'));
}

// function list data
function listData(){
    try{
        const fileContent = fs.readFileSync('./data/mahasiswa2.json');
        const data = JSON.parse(fileContent);
        if(data.length <= 0){
            console.log(chalk.red('Invalid, Data Kosong'));
            return
        }

        // menampilkan data
        const dataMahasiswa = data.map (m => ({
            Nama : m.nama,
            Email : m.email
        }))
        console.table(dataMahasiswa)
    } catch (e) {
        console.log(chalk.red('File belum ada atau kosong'));
    }
}

function detailData(){
    const fileContent = fs.readFileSync('./data/mahasiswa2.json');
    const data = JSON.parse(fileContent);
    // validasi kalo data kosong
    if(data.length <= 0){
        console.log(chalk.red('Invalid, Data Kosong'));
        return
    }
    const dataDetailMahasiswa = data.map (m => ({
        Nama : m.nama,
        Gender : m.gender,
        Jurusan : m.jurusan,
        SKS : m.sks,
        Semester : m.semester,
        Email : m.email,
        NoHp : m.noHp,
        NIM : m.nim
    }))
    console.table(dataDetailMahasiswa)
}

// mencari data mahasiswa berdasarkan nama
function searchByName(namaMahasiswa){
    try{
        const fileContent = fs.readFileSync('./data/mahasiswa2.json', 'utf8');
        const data = JSON.parse(fileContent);
        const fromUser =  data.find((m) => m.nama.toLowerCase() == namaMahasiswa.toLowerCase())
        if(fromUser) {
            console.table(fromUser)
        } else{
            console.log(chalk.red('Data tidak di temukan'))
        }
    } catch (e) {

    }
}

function deleteData(index) {

    try{
        const fileContent = fs.readFileSync('./data/mahasiswa2.json', 'utf8');
        const data = JSON.parse(fileContent);

        if(index < 0 || index >= data.length) {
            console.log(chalk.red('Index tidak valid'));
            return;
        }

        const dataDeleted = data.splice(index, 1);
        fs.writeFileSync('./data/mahasiswa2.json', JSON.stringify(data, null, 2));

        console.log(chalk.yellow('Data berhasil di hapus'));
        console.table(dataDeleted)
    } catch (e) {
        console.log(chalk.red(`Error, terjadi kesalahan ${e}`))
    }
}

module.exports = {system, listData, deleteData, detailData, searchByName}
