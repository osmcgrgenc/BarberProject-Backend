const { Model } = require('objection');

class Neighboors extends Model {
  static get tableName() {
    return 'neighboors';
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

module.exports = Districts;
