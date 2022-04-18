// mengambil argument dari command line
const yargs = require("yargs");
const { simpanContact, listContact, detailContact, removeContact } = require("./contacts");

yargs
  .command({
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
      simpanContact(argv.nama, argv.email, argv.noHp);
    },
  })
  .demandCommand();

// menampilkan daftar semua nama & no hp contact
yargs.command({
  command: "list",
  describe: "Menampilkan semua nama & no hp contact",
  handler() {
    listContact();
  },
});

// menampilkan  detail sebuah contact
yargs.command({
  command: "detail",
  describe: "Menampilkan detail sebuah contact berdasarkan nama",
  builder: {
    nama: {
      describe: "Nama Lengkap",
      demanOption: true,
      type: "string",
    },
  },
  handler(argv) {
    detailContact(argv.nama);
  },
});

// menghapus contact berdasarkan nama
yargs.command({
  command: "remove",
  describe: "Menghapus sebuah  contact berdasarkan nama",
  builder: {
    nama: {
      describe: "Nama Lengkap",
      demanOption: true,
      type: "string",
    },
  },
  handler(argv) {
    removeContact(argv.nama);
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
