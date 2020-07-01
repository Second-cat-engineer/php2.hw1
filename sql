CREATE TABLE "articles"
(
    "id" BIGSERIAL NOT NULL PRIMARY KEY,
    "title" VARCHAR(200) NOT NULL,
    "content" TEXT,
    "author_id" VARCHAR(100),
    "add_time" TIMESTAMP default current_timestamp
);
