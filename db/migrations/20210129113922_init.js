exports.up = function (knex) {
  return knex.schema
    .createTable("channel", (table) => {
      table.increments();
      table.string("name").notNullable();
      table.timestamps(true, true);
    })
    .createTable("user", (table) => {
      table.increments();
      table.string("name").notNullable();
      table.string("email").notNullable().unique();
      table.timestamp("email_verified_at").nullable();
      table.string("password");
      table.rememberToken();
      table.integer("channelId").references("id").inTable("channel");
      table.timestamps(true, true);
    })
    .createTable("failed_jobs", (table) => {
      table.id();
      table.string("uuid").unique();
      table.text("connection");
      table.text("queue");
      table.longText("payload");
      table.longText("exception");
      table.timestamp("failed_at").useCurrent();
    })
    .createTable("todos", (table) => {
      table.id();
      table.text("title");
      table.longText("description");
      table.timestamp("do_at");
      table.timestamps();
    })
    .createTable("barbers", (table) => {
      table.id();
      table.string("name");
      table.unsignedBigInteger("user_id");
      table.foreign("user_id").references("id").on("users").onDelete("cascade");

      table.boolean("is_active").default(false);

      table.text("description").nullable();
      table.float("rating").nullable();
      table.timestamps();
    })
    .createTable("cities", (table) => {
      table.id();
      table.string("name");
      table.boolean("status").default(false);
      table.timestamps();
    })
    .createTable("districts", (table) => {
      table.id();
      table
        .foreignId("city_id")
        .references("id")
        .on("cities")
        .onDelete("cascade");
      table.string("name");
      table.boolean("status").default(false);
      table.timestamps();
    })
    .createTable("neighbours", (table) => {
      table.id();
      table
        .bigInteger("district_id")
        .references("id")
        .on("districts")
        .onDelete("cascade");
      table.string("name");
      table.boolean("status").default(false);
      table.timestamps();
    })
    .createTable("reservations", (table) => {
      table.id();
      table.integer("user_id").unsigned();
      table.foreign("user_id").references("id").on("users");
      table.integer("barber_id").unsigned();
      table.foreign("barber_id").references("id").on("barbers");
      table.boolean("isOk_user").default(false);
      table.boolean("isOk_barber").default(false);
      table.date("date");
      table.time("time");
      table.timestamps();
    })
    .createTable("video", (table) => {
      table.increments();
      table.string("title").notNullable();
      table
        .integer("channelId")
        .notNullable()
        .references("id")
        .inTable("channel");
      table.timestamps(true, true);
    });
};

exports.down = function (knex) {
  return knex.schema
    .dropTableIfExists("cities")
    .dropTableIfExists("districts")
    .dropTableIfExists("neighbours")
    .dropTableIfExists("reservations")
    .dropTableIfExists("barbers")
    .dropTableIfExists("todos")
    .dropTableIfExists("video")
    .dropTableIfExists("user")
    .dropTableIfExists("channel");
};
