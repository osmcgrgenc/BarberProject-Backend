const { Model } = require('objection');

class Districts extends Model {
  static get tableName() {
    return 'districts';
  }

  static get relationMappings() {
    const cities = require('./cities');
    return {
      cities: {
        relation: Model.BelongsToOneRelation,
        modelClass: cities,
        join: {
          from: 'districts.cityId',
          to: 'cities.id',
        },
      },
    };
  }
}

module.exports = Districts;
