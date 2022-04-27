const { MongoClient, ObjectId } = require("mongodb");

const uri = "mongodb://127.0.0.1:27017";
const dbName = "wpu";

const client = new MongoClient(uri, {
  useNewUrlParser: true,
  useUnifiedTopology: true,
});

client.connect((error, client) => {
  if (error) {
    return console.log("Koneksi gagal!");
  }

  // Pilih database
  const db = client.db(dbName);

  // Menambahkan 1 data ke collection mahasiswa
  // db.collection("mahasiswa").insertOne(
  //   {
  //     nama: "Bilqis azizah",
  //     email: "bilqis@gmail.com",
  //   },
  //   (error, result) => {
  //     if (error) {
  //       return console.log("gagal menambahkan data!");
  //     }
  //     console.log(result);
  //   }
  // );

  //Menambahkan lebih dari 1 data
  // db.collection("mahasiswa").insertMany(
  //   [
  //     {
  //       nama: "Diah Insani",
  //       email: "diahinsani@yahoo.com",
  //     },
  //     {
  //       nama: "zulafan",
  //       email: "zulafan@gmail.com",
  //     },
  //   ],
  //   (error, result) => {
  //     if (error) {
  //       return console.log("data gagal di tambahkan!");
  //     }
  //     console.log(result);
  //   }
  // );

  // Menampilkan semua data yang ada di collection 'mahasiswa'
  // console.log(
  //   db
  //     .collection("mahasiswa")
  //     .find()
  //     .toArray((error, result) => {
  //       console.log(result)
  //     })
  // );

  // Menampilkan data berdasarkan kriteria yang ada di collection 'mahasiswa'
  // console.log(
  //   db
  //     .collection("mahasiswa")
  //     .find({ _id: ObjectId("6268b7ae2bf2944cf8652347")})
  //     .toArray((error, result) => {
  //       console.log(result);
  //     })
  // );

  // Mengubah data berdasarkan id
  // const updatePromise = db.collection("mahasiswa").updateOne(
  //   {
  //     _id: ObjectId("6268b7ae2bf2944cf8652347"),
  //   },
  //   {
  //     $set: {
  //       email: "lionelmessi@gmail.com",
  //     },
  //   }
  // );

  // updatePromise
  //   .then((result) => console.log(result))
  //   .catch((error) => {
  //     console.log(error);
  //   });

  // Mengubah data lebih dari 1, berdasarkan kriteria
  // db.collection("mahasiswa").updateMany(
  //   {
  //     nama: "Bilqis azizah",
  //   },
  //   {
  //     $set: {
  //       nama: "Amelia amel",
  //     },
  //   }
  // );

  // // Menghapus 1 data
  // db.collection("mahasiswa")
  //   .deleteOne({
  //     _id: ObjectId("6268b61f53bfe84390762d35"),
  //   })
  //   .then((result) => {
  //     console.log(result);
  //   })
  //   .catch((error) => {
  //     console.log(error);
  //   });

  // Menghapus lebih dari 1 data
  db.collection("mahasiswa")
    .deleteMany({
      nama: "Lionel Messi",
    })
    .then((result) => {
      console.log(result);
    })
    .catch((error) => {
      console.log(error);
    });
});
