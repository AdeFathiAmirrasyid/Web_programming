const http = require("http");
const fs = require("fs");

const renderHTML = (path, res) => {
  fs.readFile(path, (err, data) => {
    if (err) {
      res.writeHead(404);
      res.write("Error: file not found");
    } else {
      res.write(data);
    }
    res.end();
  });
};

const server = http.createServer((req, res) => {
  res.writeHead(200, {
    "Content-Type": "text/html",
  });
  const url = req.url;
  if (url === "/about") {
    renderHTML("./about.html", res);
  } else if (url === "/contact") {
    renderHTML("./contact.html", res);
  } else {
    // res.write("Hello World!");
    renderHTML("./index.html", res);
  }
});

server.listen(3002, () => {
  console.log("Server is listening on port 3002..");
});
