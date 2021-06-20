const DistrictDAO = require('../dao/districts');

class DistrictsService {
  getDistrict(id) {
    return DistrictDAO.findById(id);
  }
}

module.exports = new DistrictsService();
