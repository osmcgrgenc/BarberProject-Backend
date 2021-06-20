const citiesService = require('../service/cities');

class CitiesController {
  async getcities(req, res, next) {
    try {
      const cities = await citiesService.getCity(req.params.id);
      res.json(cities);
    } catch (err) {
      console.error(err);
      res.status(500).json(err);
    }
  }
}

module.exports = new CitiesController();
