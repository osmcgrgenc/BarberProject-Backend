const setupDb = require('./db/db-setup');
const express = require('express');
const router = require('./routes');
const https = require('https');
const http = require('http');
// set up database with objection and knex
setupDb();

const app = express();
app.use(express.json());
app.use(router);
http.createServer(app).listen(4000, () => console.log('server is running on port 4000'));
