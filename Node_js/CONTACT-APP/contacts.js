const fs = require("fs");
const validator = require("validator");

// Membuat folder data jika belum ada
const dirPath = "./data";
if (!fs.existsSync(dirPath)) {
  fs.mkdirSync(dirPath);
}

// membuat file contacts.json jika belum ada
const dataPath = "./data/contacts.json";
if (!fs.existsSync(dataPath)) {
  fs.writeFileSync(dataPath, "[]", "utf-8");
}

const simpanContact = (nama, email, noHp) => {
  const contact = { nama, email, noHp };
  const file = fs.readFileSync("data/contacts.json", "utf-8");
  const contacts = JSON.parse(file);

  // cek duplicate
  const duplicate = contacts.find((contact) => contact.nama === nama);
  if (duplicate) {
    console.log("Contact sudah terdaftar, gunakan nama lain");
    return false;
  }

  // cek email
 if(email) {
   if(!validator.isEmail(email)){
    console.log("Email tidak valid!");
    return false;
   }
 }

 //cek no HP
 if(!validator.isMobilePhone(noHp,('id-ID'))){
  console.log("No HP tidak valid!");
  return false;
 }

  contacts.push(contact);
  fs.writeFileSync("data/contacts.json", JSON.stringify(contacts));
  console.log("Terima kasih sudah memasukan data");
};

module.exports = {
  simpanContact,
};
