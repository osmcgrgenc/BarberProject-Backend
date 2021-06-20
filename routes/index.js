const express = require("express");
const userController = require("../controller/user");
const citiesController = require("../controller/cities");
const districtsController = require("../controller/districts");

const router = express.Router();
// TODO move implementation to controller and service layer
router.get("/user/:id", userController.getUser);
router.get("/city/:id", citiesController.getcities);
router.get("/district/:id", districtsController.getdistricts);
module.exports = router;
