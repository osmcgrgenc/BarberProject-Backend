const { Model } = require('objection');

class Cities extends Model {
  static get tableName() {
    return 'cities';
  }

  static get relationMappings() {
    const districts = require('./districts');
    return {
      districts: {
        relation: Model.HasManyRelation,
        modelClass: districts,
        join: {
          from: 'cities.id',
          to: 'districts.cityId',
        },
      },
    };
  }
}

module.exports = Cities;
