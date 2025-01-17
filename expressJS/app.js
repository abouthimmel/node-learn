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

// app.use('/', (req, res) => {
//   res.status(404)
//   res.send('<h1>404</h1> <br> Error: File not found');
  
// })

app.use((req, res) => {
  res.status(404).send('<h1>404</h1><br>Error: File not found');
});

app.listen(port, () => {
  console.log(`Example app listening on port ${port}`);
})
