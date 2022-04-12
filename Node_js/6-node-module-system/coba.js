//Synchronous
// const getUserSync = (id) => {
//   // let nama = "";
//   // if (id === 1) {
//   //   nama = "Diah insani";
//   // } else {
//   //   nama = "fathie_insani";
//   // }

//   const nama = id === 1 ? "Diah Insani" : "Fathi_Insani";
//   return { id, nama };
// };

// const userSatu = getUserSync(1);
// console.log(userSatu);

// const userDua = getUserSync(2);
// console.log(userDua);

// const hallo = "Hello World";
// console.log(hallo);

// Asynchronous

const getUser = (id, cb) => {
  const time = id === 1 ? 3000 : 2000;
  setTimeout(() => {
    const nama = id === 1 ? "Diah Insani" : "Fathi_Insani";
    cb({ id, nama });
  }, time);
};

const userSatu = getUser(1, (hasil) => {
  console.log(hasil);
});

const userDua = getUser(2, (hasil) => {
  console.log(hasil);
});

const hallo = "Hello World";
console.log(hallo);
