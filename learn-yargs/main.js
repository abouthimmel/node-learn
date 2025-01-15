const yargs = require("yargs");
const { system, listData, deleteData, detailData, searchByName } = require("./algo");

// menambahkan data mahasiswa
yargs.command({
    command: 'add',
    describe: 'Menambahkan kontak baru',
    builder: {
        nama : {
            describe : 'Nama lengkap',
            demandOption : true,
            type : 'string',
        },
        gender : {
            describe: 'Gender',
            demandOption: true,
            type: 'string',
        },
        jurusan : {
            describe: 'Jurusan',
            demandOption: true,
            type: 'string'
        },
        sks : {
            describe: 'SKS',
            demandOption: true,
            type: 'number',
        },
        semester : {
            describe : 'Semester',
            demandOption: true,
            type: 'number',
        },
        email: {
            describe: "Email",
            demandOption: true,
            type: "string",
        },
        noHp : {
            describe : "Nomor Handphone",
            demandOption: true,
            type: 'string',
        },
        nim : {
            describe : "Nomor Induk Mahasiswa",
            demandOption : true,
            type : 'number'
        }
    },
    handler(argv){
        system(argv.nama, argv.gender, argv.jurusan, argv.sks, argv.semester, argv.email, argv.noHp, argv.nim);
        
    }
})

// menampilkan list mahasiswa
yargs.command({
    command: 'list',
    describe: 'Menampilkan data dari setiap mahasiswa',
    handler() {
        listData();
    }
})

// menampilkan detail data mahasiswa
yargs.command({
    command: 'detail',
    describe: 'Menampilkan data detail dari setiap mahasiswa',
    handler() {
        detailData()
    }
})

// menghapus data mahasiswa
yargs.command({
    command: 'delete',
    describe: 'Menghapus data berdasarkan index',
    builder: {
        i: {
            describe: 'Indeks yg ingin di hapus',
            demandOption: true,
            type: 'number',
        }
    },
    handler(argv) {
        deleteData(argv.i)
    }
})

yargs.command({
    command : 'search',
    describe : 'Mencari data mahasiswa berdasarkan nama',
    builder : {
        namaMahasiswa : {
            describe : 'Mencari data mahasiswa berdasarkan nama',
            demandOption : true,
            type : 'string'
        }
    },
    handler(argv){
        searchByName(argv.namaMahasiswa)
    }
})

yargs.parse()