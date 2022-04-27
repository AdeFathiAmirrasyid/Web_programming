const mongoose = require("mongoose");
mongoose.connect("mongodb://127.0.0.1:27017/wpu", {
  useNewUrlParser: true,
  useUnifiedTopology: true,
  useCreateIndex: true,
});

// // Menambah 1 data
// const contact1 = new Contact({
//   nama: "Fathi Insani",
//   nohp: "089234555678",
//   email: "fathiinsani@gmail.com",
// });

// // Simpan ke collection
// contact1.save().then((contact) => {
//   console.log(contact);
// })
