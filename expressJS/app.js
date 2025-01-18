const express = require('express')
const app = express()
const port = 3000
const fs = require('fs/promises')

app.get('/', (req, res) => {
  res.send('Hello World!')
})

app.get('/contact', async (req, res) => {
  try{
    const data = await fs.readFile('contact.html', 'utf8');
    res.send(data);
  } catch (e) {
    console.error(e);
    res.status(500).send('Interval Server Error')
  }
})

// membaca dari file index html lain
app.get('/about', async(req, res) => {
  try{
    const data = await fs.readFile('about.html', 'utf8');
    res.send(data)
  } catch (e) {
    console.error(e);
    res.status(500).send('Interval Server Error')
  }
})

// mengirimkan dara berformat json
app.get('/data-mahasiswa', async (req, res) => {
  try{
    const data = await fs.readFile('dataMahasiswa.json', 'utf8');
    // const jsonData = JSON.parse(data);
    // res.send(data);
    res.json(JSON.parse(data))
  } catch (e) {
    console.error(e);
    res.status(500).send('Interval Server Error')
  }
})

//atau jika ingin lebih mudah
app.get('/tes', (req, res) => {
  res.sendFile('tes.json', {root: __dirname});
})

// app.use('/', (req, res) => {
//   res.status(404)
//   res.send('<h1>404</h1> <br> Error: File not found');
  
// })

app.get('/produk/:id/category/:idCat', (req, res) => {
  res.send(`produkID :    <h1> ${req.params.id}</h1> \nCategory ID: ${req.params.idCat}`)
}) // maka url localhost akan menjadi seperti ini localhost:300/produk(tergantung kita masukin berapa)/category(terserah masukin berapa), tapi ini nanti gabisa asal


app.get('/produk/:id', (req, res) => {
  res.send(`produkID : ${req.params.id} \ncategory : ${req.query.category}`)
}) // maka url yg muncul adalah localhost:3000/produk(example:41)/?category=(example: shoes)



app.use( async(req, res) => {
  // res.status(404).send('<h1>404</h1> <h1>Error: File not found</h1>');
  try{
    const erpg = await fs.readFile('errorPage.html', 'utf-8');
    res.send(erpg);
  } catch(err) {
    console.error(e);
    res.send('Interval Server Error')
  }
});


app.listen(port, () => {
  console.log(`Example app listening on port ${port}`);
})
