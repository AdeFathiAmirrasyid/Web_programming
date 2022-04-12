function cetakNama(nama) {
  return `Hallo, Nama saya ${nama}`;
}

const PI = 3.14;

const mahasiswa = {
  nama: "fathie_insani",
  umur: 24,
  cetakMhs() {
    return `Hallo, nama saya ${this.nama} dan saya ${this.umur} tahun`;
  },
};

class Orang {
  constructor() {
    console.log("Object orang telah dibuat!!");
  }
}

// module.exports.cetakNama = cetakNama;
// module.exports.PI = PI;
// module.exports.mahasiswa = mahasiswa;
// module.exports.Orang = Orang;

// module.exports = {
//   cetakNama: cetakNama,
//   PI: PI,
//   mahasiswa: mahasiswa,
//   Orang: Orang,
// };
module.exports = { cetakNama, PI, mahasiswa, Orang };
