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

const loadContact = () => {
  const file = fs.readFileSync("data/contacts.json", "utf-8");
  const contacts = JSON.parse(file);
  return contacts;
};
const simpanContact = (nama, email, noHp) => {
  const contact = { nama, email, noHp };
  const contacts = loadContact();
  // const file = fs.readFileSync("data/contacts.json", "utf-8");
  // const contacts = JSON.parse(file);

  // cek duplicate
  const duplicate = contacts.find((contact) => contact.nama === nama);
  if (duplicate) {
    console.log("Contact sudah terdaftar, gunakan nama lain");
    return false;
  }

  // cek email
  if (email) {
    if (!validator.isEmail(email)) {
      console.log("Email tidak valid!");
      return false;
    }
  }

  //cek no HP
  if (!validator.isMobilePhone(noHp, "id-ID")) {
    console.log("No HP tidak valid!");
    return false;
  }

  contacts.push(contact);
  fs.writeFileSync("data/contacts.json", JSON.stringify(contacts));
  console.log("Terima kasih sudah memasukan data");
};

const listContact = () => {
  const contacts = loadContact();
  console.log("Daftar Contact : ");
  contacts.forEach((contact, i) => {
    console.log(`${i + 1}, ${contact.nama} - ${contact.noHp}`);
  });
};

const detailContact = (nama) => {
  const contacts = loadContact();
  const contact = contacts.find((contact) => contact.nama.toLowerCase() === nama.toLowerCase());
  if (!contact) {
    console.log(`${nama} tidak di temukan`);
    return false;
  }

  console.log(contact.nama);
  console.log(contact.noHp);
  if (contact.email) {
    console.log(contact.email);
  }
};

const removeContact = (nama) => {
  const contacts = loadContact();
  const newContacts = contacts.filter(
    (contact) => contact.nama.toLowerCase() !== nama.toLowerCase()
  );

  if (contacts.length === newContacts.length) {
    console.log(`${nama} tidak di temukan`);
    return false;
  }

  fs.writeFileSync("data/contacts.json", JSON.stringify(newContacts));
  console.log(`data contact ${nama} berhasil dihapus!`);
};

module.exports = {
  simpanContact,
  listContact,
  detailContact,
  removeContact,
};
