// const http = require("http");
// const fs = require('fs');
// const dom = require("dominate");

// const port = process.argv[2] || 3000;
// const phpFilePath = process.argv[3] || 'path/to/your/php/file.php';

// http.createServer((req, res) => {
//     const phpFile = fs.readFileSync(phpFilePath, 'utf-8');
// 	const html = dom.compile(phpFile);
// 	res.writeHead(200, { "Content-Type": "text/html" });
// 	res.end(html);
//     console.log(`Rendering at http://localhost:${port}`);
// }).listen(port, () => {console.log(`Server running at http://localhost:${port}/`);});


const http = require("http");
const fs = require('fs');
const php = require("node-php");

const port = process.argv[2] || 3000;
const phpFilePath = process.argv[3] || 'path/to/your/php/file.php';

http.createServer((req, res) => {
    php.cgi(req, res, phpFilePath);
    console.log(`Rendering at http://localhost:${port}`);
}).listen(port, () => {
    console.log(`Server running at http://localhost:${port}/`);
});
