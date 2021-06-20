const { Model } = require('objection');

class Reservations extends Model {
  static get tableName() {
    return 'reservations';
  }
  static get relationMappings() {
    const districts = require('./districts');
    return {
      districts: {
        relation: Model.BelongsToOneRelation,
        modelClass: districts,
        join: {
          from: 'neighboors.districtId',
          to: 'districts.id',
        },
      },
    };
  }
  
}

module.exports = Reservations;
