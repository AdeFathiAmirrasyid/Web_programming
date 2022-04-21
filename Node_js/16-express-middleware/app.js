const express = require("express");
const expressLayouts = require("express-ejs-layouts");
const morgan = require('morgan');
const app = express();
const port = 3002;

// menggunakan ejs
app.set("view engine", "ejs");

//Third-party Middleware
app.use(expressLayouts);
app.use(morgan('dev'))



// Built-in middleware
app.use(express.static('public'))

// Application level middleware
app.use((req, res, next) => {
  console.log("Time: ", Date.now());
  next();
});

app.get("/", (req, res) => {
  // res.sendFile("./index.html", { root: __dirname });

  const mahasiswa = [
    {
      nama: "Diah Insani",
      email: "diahinsani@gmail.com",
    },
    {
      nama: "Fathi Insani",
      email: "fathiinsani@gmail.com",
    },
    {
      nama: "sinta elisa",
      email: "sintaelisa@gmail.com",
    },
  ];
  res.render("index", {
    nama: "Fathie Insani",
    title: "halaman home",
    mahasiswa,
    layout: "layouts/main-layout",
  });
});

app.get("/product/:id", (req, res) => {
  res.send(`Product ID : ${req.params.id} <br> Category : ${req.query.category}`);
});

app.get("/about", (req, res) => {
  res.render("about", { layout: "layouts/main-layout", title: "Halaman About" });
});
app.get("/contact", (req, res) => {
  res.render("contact", {
    layout: "layouts/main-layout",
    title: "Halaman Contact",
  });
});

app.use("/", (req, res) => {
  res.status(404);
  res.send("<h1>404</h1>");
});

app.listen(port, () => {
  console.log(`Example app listening on port ${port}`);
});
