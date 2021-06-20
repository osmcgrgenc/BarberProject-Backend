const { Model } = require('objection');

class Reservations extends Model {
  static get tableName() {
    return 'reservations';
  }

  
}

module.exports = Reservations;
