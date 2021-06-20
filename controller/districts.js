const districtsService = require('../service/districts');

class districtsController {
  async getdistricts(req, res, next) {
    try {
      const districts = await districtsService.getDistrict(req.params.id);
      res.json(districts);
    } catch (err) {
      console.error(err);
      res.status(500).json(err);
    }
  }
}

module.exports = new districtsController();
