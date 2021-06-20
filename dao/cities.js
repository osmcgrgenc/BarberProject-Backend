const City = require('../db/models/cities');

class CityDAO {
  findById(id) {
    return City.query().findById(id).withGraphFetched('districts');
  }
}

module.exports = new CityDAO();
