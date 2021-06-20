const Neighboors = require('../db/models/neighboors');

class NeighboorsDAO {
  findById(id) {
    return Neighboors.query().findById(id).withGraphFetched('districts');
  }
}

module.exports = new NeighboorsDAO();
