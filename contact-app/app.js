// const fs = require('fs');
const readline = require('readline')
const q = require('./pertanyaan')
// const rl = readline.createInterface({
//     input:process.stdin,
//     output:process.stdout
// })



async function main() {
    try{
        q.makeFolder()
        await q.pushNewData()
    } catch (e) {
        console.error('Terjadi kesalahan', e.message);
    } finally {
        q.rl.close();
    };
};

main()