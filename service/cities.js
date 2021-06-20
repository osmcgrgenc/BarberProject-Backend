const cityDAO = require('../dao/cities');

class CitiesService {
  getCity(id) {
    return cityDAO.findById(id);
  }
}

module.exports = new CitiesService();
