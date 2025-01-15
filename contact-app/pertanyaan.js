const fs = require('fs');
const readline = require('readline')

const rl = readline.createInterface({
    input:process.stdin,
    output:process.stdout
})


function pertanyaan(a) {
    return new Promise((resolve) => {
        rl.question(a, (jawaban) => {
            resolve(jawaban);
        });
    });
}

function makeFolder () {
    if(!fs.existsSync('./data')) {
        fs.mkdirSync('./data')
    }

    //membuat file mahasiswa.json jika belum ada
    if(!fs.existsSync('data/mahasiswa.json')) {
        fs.writeFileSync('data/mahasiswa.json', '[]', 'utf8');
    }
}

async function pushNewData(){
    
    const nama = await pertanyaan('Nama Mahasiswa = ');
    const gender = await pertanyaan('Gender = ');
    const jurusan = await pertanyaan('Jurusan = ');
    const sks = await pertanyaan('SKS = ');
    const semester = await pertanyaan('Semester = ');


const mahasiswa = {nama, gender, jurusan, sks, semester};

let data = [];
    try{
        const fileContent = fs.readFileSync('data/mahasiswa.json', 'utf8');
        data = JSON.parse(fileContent);
    } catch (e) {
        // console.error(e);
        console.log('File belum ada atau kosong, akan di buat baru');
        
    }
    // menambahkan data baru
    data.push(mahasiswa);

    // menyimpan array ke json
    fs.writeFileSync('data/mahasiswa.json', JSON.stringify(data, null, 2));
    console.log('Data berhasil di simpan')
}

module.exports = {pertanyaan, rl, makeFolder, pushNewData}