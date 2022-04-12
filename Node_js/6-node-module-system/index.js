// const fs = require('fs'); // core module
// const cetakNama = require("./coba_satu"); // local module
// const momen = require('momen'); // third party module / npm module / node_modules

// const cetakNama = require("./coba_satu");

const coba_satu = require("./coba_satu");

console.log(
  coba_satu.cetakNama("Insanie"),
  coba_satu.PI,
  coba_satu.mahasiswa.cetakMhs(),
  new coba_satu.Orang()
);
