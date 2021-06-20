const Districts = require('../db/models/districts');

class DistrictsDAO {
  findById(id) {
    return Districts.query().findById(id).withGraphFetched('cities');
  }
}

module.exports = new DistrictsDAO();
