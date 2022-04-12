// Core Module
// File System
const fs = require("fs");

// Menuliskan string ke file(Synchronous)
// fs.writeFileSync("test.txt", "Hello World secara synchronous");

// menuliskan string ke file (asynchronous)
// fs.writeFile("data/test.txt", "Hello World secara Asynchronous", (error) => {
//   console.log(error);
// });

//Membaca isi file (synchronous)
// const data = fs.readFileSync("data/test.txt");
// console.log(data.toString());

// membaca isi file (asynchronous)
// fs.readFile("data/test.txt", "utf-8", (err, data) => {
//   if(err) throw err;
//   console.log(data);
// });

const realine = require("readline");
const rl = realine.createInterface({
  input: process.stdin,
  output: process.stdout,
});

rl.question("Masukan Nama Anda : ", (nama) => {
  rl.question("Masukan no HP anda : ", (noHp) => {
    const contact = { nama, noHp };
    const file = fs.readFileSync('data/contacts.json', 'utf-8');
    const contacts = JSON.parse(file);

    contacts.push(contact);
    fs.writeFileSync('data/contacts.json', JSON.stringify(contacts));
    console.log('Terima kasih')

    rl.close();
  });
});
