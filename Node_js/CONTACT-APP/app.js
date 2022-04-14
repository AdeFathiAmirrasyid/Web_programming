// mengambil argument dari command line
const yargs = require("yargs");
const { simpanContact } = require("./contacts");

yargs.command({
  command: "add",
  describe: "Menambahkan contact baru",
  builder: {
    nama: {
      describe: "Nama Lengkap",
      demanOption: true,
      type: "string",
    },
    email: {
      describe: "email",
      demanOption: false,
      type: "string",
    },
    noHp: {
      describe: "No Hp",
      demanOption: true,
      type: "string",
    },
  },
  handler(argv) {
    simpanContact(argv.nama, argv.email, argv.noHp)
    
  },
});

yargs.parse();

// const { tulisPertanyaan, simpanContact } = require("./contacts");
// const main = async () => {
//   const nama = await tulisPertanyaan("Masukan nama anda : ");
//   const email = await tulisPertanyaan("Masukan email anda : ");
//   const noHp = await tulisPertanyaan("Masukan no Hp anda : ");

//   simpanContact(nama, email, noHp);
// };

// main();
