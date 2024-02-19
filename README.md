## Description

"Skindividual" is a fictional online shop created for a university team project. The shop sells tickets for events and individual appointments dealing with skincare and wellness in Germany. The website's backend is written in php using the Laravel framework and is built as a REST-API. <br><br>The frontend of the website and further information about the project can be found in the [skindividual-frontend repository](https://github.com/AlexQ42/Skindividual-frontend).

## How to use

1. Execute command `docker compose up`
2. Connect database:
    Username: skindividual      Password: 1234
3. Install php and composer if necessary
4. Execute command `composer install`
5. Execute command `php artisan migrate`
6. Start server by executing `php artisan serve`
<br>

By default, the database will be empty. Before starting the server, it is therefore recommended to execute the following INSERT statements in the database's SQL console:
<br>

INSERT INTO skindividual.events (id, name, place, date, skinType, eventType, price, availableSpots, description, created_at, updated_at) VALUES (1, 'Microneedling', 'Hamburg', '2030-08-21 00:00:00', 'combination', 'treatment', 99, 29, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam', '2023-05-14 12:45:25', '2023-07-05 13:31:42');
INSERT INTO skindividual.events (id, name, place, date, skinType, eventType, price, availableSpots, description, created_at, updated_at) VALUES (2, 'Meersalz-Peeling', 'München', '2030-10-15 00:00:00', 'dry', 'treatment', 43, 30, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam', '2023-05-15 21:01:56', '2023-05-15 21:02:01');
INSERT INTO skindividual.events (id, name, place, date, skinType, eventType, price, availableSpots, description, created_at, updated_at) VALUES (3, 'Individuelle Beratung', 'Hamburg', '2030-08-15 21:02:44', 'dry', 'counselling', 28, 68, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam', '2023-05-15 21:03:19', '2023-06-28 10:10:05');
INSERT INTO skindividual.events (id, name, place, date, skinType, eventType, price, availableSpots, description, created_at, updated_at) VALUES (4, 'Wellness-Tage »Relax«', 'Hamburg', '2030-07-24 00:00:00', 'normal', 'wellness', 124, 29, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam', '2023-05-22 00:00:00', '2023-06-28 10:10:05');
INSERT INTO skindividual.events (id, name, place, date, skinType, eventType, price, availableSpots, description, created_at, updated_at) VALUES (5, 'Individuelle Beratung', 'Nürnberg', '2030-08-07 09:54:56', 'sensitive', 'counselling', 28, 69, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam', '2023-06-07 09:55:43', '2023-07-05 13:32:30');
INSERT INTO skindividual.events (id, name, place, date, skinType, eventType, price, availableSpots, description, created_at, updated_at) VALUES (6, 'Meersalz-Peeling', 'Nürnberg', '2030-09-10 00:00:00', 'oily', 'treatment', 43, 4, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam', '2023-06-07 09:56:48', '2023-06-28 10:25:34');
INSERT INTO skindividual.events (id, name, place, date, skinType, eventType, price, availableSpots, description, created_at, updated_at) VALUES (7, 'Wellness-Tage »Chillout«', 'München', '2030-09-28 09:57:23', 'sensitive', 'wellness', 135, 30, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam', '2023-06-07 09:58:03', '2023-06-07 09:58:04');
INSERT INTO skindividual.events (id, name, place, date, skinType, eventType, price, availableSpots, description, created_at, updated_at) VALUES (8, 'Individuelle Beratung', 'Berlin', '2030-09-05 15:16:11', 'normal', 'counselling', 28, 70, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam', '2023-07-05 15:16:56', '2023-07-05 15:16:59');
INSERT INTO skindividual.events (id, name, place, date, skinType, eventType, price, availableSpots, description, created_at, updated_at) VALUES (9, 'Individuelle Beratung', 'München', '2030-10-07 15:17:16', 'oily', 'counselling', 28, 69, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam', '2023-07-05 15:17:48', '2023-07-05 13:33:38');
INSERT INTO skindividual.events (id, name, place, date, skinType, eventType, price, availableSpots, description, created_at, updated_at) VALUES (10, 'Microneedling', 'Berlin', '2030-08-21 00:00:00', 'oily', 'treatment', 99, 27, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam', '2023-05-14 12:45:25', '2023-07-05 13:33:39');
INSERT INTO skindividual.events (id, name, place, date, skinType, eventType, price, availableSpots, description, created_at, updated_at) VALUES (11, 'Anti-Aging-Behandlung', 'München', '2030-09-12 15:19:01', 'normal', 'treatment', 112, 30, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam', '2023-07-05 15:19:30', '2023-07-05 15:19:31');
INSERT INTO skindividual.events (id, name, place, date, skinType, eventType, price, availableSpots, description, created_at, updated_at) VALUES (12, 'Anti-Aging-Behandlung', 'München', '2030-09-12 15:19:01', 'oily', 'treatment', 112, 30, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam', '2023-07-05 15:19:30', '2023-07-05 15:19:31');
INSERT INTO skindividual.events (id, name, place, date, skinType, eventType, price, availableSpots, description, created_at, updated_at) VALUES (13, 'Anti-Aging-Behandlung', 'Hamburg', '2030-09-12 15:19:01', 'dry', 'treatment', 112, 30, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam', '2023-07-05 15:19:30', '2023-07-05 15:19:31');
INSERT INTO skindividual.events (id, name, place, date, skinType, eventType, price, availableSpots, description, created_at, updated_at) VALUES (14, 'Wellness-Tage »Relax«', 'Hamburg', '2030-07-24 00:00:00', 'sensitive', 'wellness', 124, 29, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam', '2023-05-22 00:00:00', '2023-06-28 10:10:05');
INSERT INTO skindividual.events (id, name, place, date, skinType, eventType, price, availableSpots, description, created_at, updated_at) VALUES (15, 'Wellness-Tage »Chillout«', 'München', '2030-09-28 09:57:23', 'dry', 'wellness', 135, 30, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam', '2023-06-07 09:58:03', '2023-06-07 09:58:04');
INSERT INTO skindividual.events (id, name, place, date, skinType, eventType, price, availableSpots, description, created_at, updated_at) VALUES (16, 'Wellness-Tage »Chillout«', 'München', '2030-09-28 09:57:23', 'combination', 'wellness', 135, 30, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam', '2023-06-07 09:58:03', '2023-06-07 09:58:04');
INSERT INTO skindividual.events (id, name, place, date, skinType, eventType, price, availableSpots, description, created_at, updated_at) VALUES (17, 'Individuelle Beratung', 'Berlin', '2030-10-07 15:17:16', 'combination', 'counselling', 28, 70, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam', '2023-07-05 15:17:48', '2023-07-05 15:17:52');
INSERT INTO skindividual.events (id, name, place, date, skinType, eventType, price, availableSpots, description, created_at, updated_at) VALUES (18, 'Meersalz-Peeling', 'Nürnberg', '2030-09-10 00:00:00', 'combination', 'treatment', 43, 4, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam', '2023-06-07 09:56:48', '2023-06-28 10:25:34');
INSERT INTO skindividual.events (id, name, place, date, skinType, eventType, price, availableSpots, description, created_at, updated_at) VALUES (19, 'Wellness-Tage »Relax«', 'Nürnberg', '2030-07-24 00:00:00', 'combination', 'wellness', 124, 27, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam', '2023-05-22 00:00:00', '2023-07-05 13:31:42');
INSERT INTO skindividual.events (id, name, place, date, skinType, eventType, price, availableSpots, description, created_at, updated_at) VALUES (20, 'Nachhaltige Hautpflege', 'Berlin', '2030-11-28 15:23:15', 'normal', 'course', 55, 40, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam', '2023-07-05 15:23:42', '2023-07-05 15:23:43');
INSERT INTO skindividual.events (id, name, place, date, skinType, eventType, price, availableSpots, description, created_at, updated_at) VALUES (21, 'Nachhaltige Hautpflege', 'Berlin', '2030-11-28 15:23:15', 'oily', 'course', 55, 40, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam', '2023-07-05 15:23:42', '2023-07-05 15:23:43');
INSERT INTO skindividual.events (id, name, place, date, skinType, eventType, price, availableSpots, description, created_at, updated_at) VALUES (22, 'Schönheit im Alter', 'Berlin', '2030-11-28 15:23:15', 'normal', 'course', 55, 40, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam', '2023-07-05 15:23:42', '2023-07-05 15:23:43');
INSERT INTO skindividual.events (id, name, place, date, skinType, eventType, price, availableSpots, description, created_at, updated_at) VALUES (23, 'Nachhaltige Hautpflege', 'Berlin', '2030-09-26 15:23:15', 'sensitive', 'course', 55, 40, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam', '2023-07-05 15:23:42', '2023-07-05 15:23:43');
INSERT INTO skindividual.events (id, name, place, date, skinType, eventType, price, availableSpots, description, created_at, updated_at) VALUES (24, 'Sonnenschutz und UV', 'Hamburg', '2030-11-23 15:23:15', 'combination', 'course', 70, 40, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam', '2023-07-05 15:23:42', '2023-07-05 15:23:43');


INSERT INTO skindividual.users (id, name, email, email_verified_at, password, remember_token, created_at, updated_at, skinType, firstname, lastname) VALUES (23, 'FriedaFreundlich', 'friedaf@gmx.de', null, '$2y$10$XIN3RYStkr3oiWCF6JYOZ.Jh4fDywvMfEeqXN8eG57ykEyNX16LO2', null, '2023-07-05 13:27:47', '2023-07-05 13:27:47', 'combination', 'Frieda', 'Freundlich');
INSERT INTO skindividual.users (id, name, email, email_verified_at, password, remember_token, created_at, updated_at, skinType, firstname, lastname) VALUES (24, 'EllaWiese', 'ellaw@bla.de', null, '$2y$10$7v7q1lvdmwGP.t0YbwbNb.WjA2ao1uh/YZjLhCVtacny8uy3dh8le', null, '2023-07-05 13:28:10', '2023-07-05 13:28:10', 'dry', 'Ella', 'Wiese');
INSERT INTO skindividual.users (id, name, email, email_verified_at, password, remember_token, created_at, updated_at, skinType, firstname, lastname) VALUES (25, 'TildaGroßmann', 'TildaGroßmann@hof.de', null, '$2y$10$r3EOp/5Vf3lFeE4nCp.xUOy4nkdRPSo5chOvkaQkFv3eBMM948VD.', null, '2023-07-05 13:28:48', '2023-07-05 13:28:48', 'sensitive', 'Tilda', 'Großmann');
INSERT INTO skindividual.users (id, name, email, email_verified_at, password, remember_token, created_at, updated_at, skinType, firstname, lastname) VALUES (26, 'LuisaSchwarz', 'luisaaa@yolo.de', null, '$2y$10$dVG/BBu9sz4HewE9Rp.BSe5y/bAkfaNA5FXizZzfDG2YeALfQ8pBe', null, '2023-07-05 13:29:15', '2023-07-05 13:29:15', 'none', 'Luisa', 'Schwarz');
INSERT INTO skindividual.users (id, name, email, email_verified_at, password, remember_token, created_at, updated_at, skinType, firstname, lastname) VALUES (27, 'TimoThaler', 'timoth@yahoo.com', null, '$2y$10$eVIdwybNpXQYNfiUiOqmEOjepFfgF2BGJF6oJGUnS0v9Uw/27dRPm', null, '2023-07-05 13:29:50', '2023-07-05 13:29:50', 'oily', 'Timo', 'Thaler');
INSERT INTO skindividual.users (id, name, email, email_verified_at, password, remember_token, created_at, updated_at, skinType, firstname, lastname) VALUES (28, 'IdaSchiffer', 'dieEchteIda@aida.de', null, '$2y$10$43az1NxH9p5gGkwwDSbpsOWpC4V16kC1Ic0SlgSyPPQVrGHDIlyVy', null, '2023-07-05 13:30:33', '2023-07-05 13:30:33', 'sensitive', 'Ida', 'Schiffer');


INSERT INTO skindividual.orders (id, created_at, updated_at, user_id) VALUES (17, '2023-07-05 13:31:42', '2023-07-05 13:31:42', 23);
INSERT INTO skindividual.orders (id, created_at, updated_at, user_id) VALUES (18, '2023-07-05 13:32:30', '2023-07-05 13:32:30', 28);
INSERT INTO skindividual.orders (id, created_at, updated_at, user_id) VALUES (19, '2023-07-05 13:33:38', '2023-07-05 13:33:38', 27);


INSERT INTO skindividual.tickets (id, order_id, event_id, created_at, updated_at) VALUES (62, 17, 1, '2023-07-05 13:31:42', '2023-07-05 13:31:42');
INSERT INTO skindividual.tickets (id, order_id, event_id, created_at, updated_at) VALUES (63, 17, 19, '2023-07-05 13:31:42', '2023-07-05 13:31:42');
INSERT INTO skindividual.tickets (id, order_id, event_id, created_at, updated_at) VALUES (64, 17, 19, '2023-07-05 13:31:42', '2023-07-05 13:31:42');
INSERT INTO skindividual.tickets (id, order_id, event_id, created_at, updated_at) VALUES (65, 18, 5, '2023-07-05 13:32:30', '2023-07-05 13:32:30');
INSERT INTO skindividual.tickets (id, order_id, event_id, created_at, updated_at) VALUES (66, 19, 9, '2023-07-05 13:33:38', '2023-07-05 13:33:38');
INSERT INTO skindividual.tickets (id, order_id, event_id, created_at, updated_at) VALUES (67, 19, 10, '2023-07-05 13:33:38', '2023-07-05 13:33:38');
INSERT INTO skindividual.tickets (id, order_id, event_id, created_at, updated_at) VALUES (68, 19, 10, '2023-07-05 13:33:39', '2023-07-05 13:33:39');
INSERT INTO skindividual.tickets (id, order_id, event_id, created_at, updated_at) VALUES (69, 19, 10, '2023-07-05 13:33:39', '2023-07-05 13:33:39');



INSERT INTO skindividual.reviews (id, value, user_id, event_id, created_at, updated_at) VALUES (10, 4, 23, 1, '2023-07-05 15:34:47', '2023-07-05 15:34:48');
INSERT INTO skindividual.reviews (id, value, user_id, event_id, created_at, updated_at) VALUES (11, 5, 23, 1, '2023-07-05 15:34:47', '2023-07-05 15:34:48');
INSERT INTO skindividual.reviews (id, value, user_id, event_id, created_at, updated_at) VALUES (12, 5, 28, 1, '2023-07-05 15:34:47', '2023-07-05 15:34:48');
INSERT INTO skindividual.reviews (id, value, user_id, event_id, created_at, updated_at) VALUES (13, 4, 23, 2, '2023-07-05 15:35:45', '2023-07-05 15:35:46');
INSERT INTO skindividual.reviews (id, value, user_id, event_id, created_at, updated_at) VALUES (14, 3, 26, 3, '2023-07-05 15:36:32', '2023-07-05 15:36:34');
INSERT INTO skindividual.reviews (id, value, user_id, event_id, created_at, updated_at) VALUES (15, 3, 24, 3, '2023-07-05 15:36:32', '2023-07-05 15:36:34');
INSERT INTO skindividual.reviews (id, value, user_id, event_id, created_at, updated_at) VALUES (16, 5, 27, 3, '2023-07-05 15:36:32', '2023-07-05 15:36:34');
INSERT INTO skindividual.reviews (id, value, user_id, event_id, created_at, updated_at) VALUES (17, 5, 27, 4, '2023-07-05 15:36:32', '2023-07-05 15:36:34');
INSERT INTO skindividual.reviews (id, value, user_id, event_id, created_at, updated_at) VALUES (18, 4, 27, 5, '2023-07-05 15:36:32', '2023-07-05 15:36:34');
INSERT INTO skindividual.reviews (id, value, user_id, event_id, created_at, updated_at) VALUES (19, 3, 25, 5, '2023-07-05 15:36:32', '2023-07-05 15:36:34');
INSERT INTO skindividual.reviews (id, value, user_id, event_id, created_at, updated_at) VALUES (20, 5, 25, 6, '2023-07-05 15:36:32', '2023-07-05 15:36:34');
INSERT INTO skindividual.reviews (id, value, user_id, event_id, created_at, updated_at) VALUES (21, 3, 25, 7, '2023-07-05 15:36:32', '2023-07-05 15:36:34');
INSERT INTO skindividual.reviews (id, value, user_id, event_id, created_at, updated_at) VALUES (22, 4, 23, 7, '2023-07-05 15:36:32', '2023-07-05 15:36:34');
INSERT INTO skindividual.reviews (id, value, user_id, event_id, created_at, updated_at) VALUES (23, 4, 23, 8, '2023-07-05 15:36:32', '2023-07-05 15:36:34');
INSERT INTO skindividual.reviews (id, value, user_id, event_id, created_at, updated_at) VALUES (24, 5, 28, 8, '2023-07-05 15:36:32', '2023-07-05 15:36:34');
INSERT INTO skindividual.reviews (id, value, user_id, event_id, created_at, updated_at) VALUES (25, 5, 26, 10, '2023-07-05 15:36:32', '2023-07-05 15:36:34');
INSERT INTO skindividual.reviews (id, value, user_id, event_id, created_at, updated_at) VALUES (26, 5, 26, 11, '2023-07-05 15:36:32', '2023-07-05 15:36:34');
INSERT INTO skindividual.reviews (id, value, user_id, event_id, created_at, updated_at) VALUES (27, 4, 26, 12, '2023-07-05 15:36:32', '2023-07-05 15:36:34');
INSERT INTO skindividual.reviews (id, value, user_id, event_id, created_at, updated_at) VALUES (28, 4, 23, 12, '2023-07-05 15:36:32', '2023-07-05 15:36:34');
INSERT INTO skindividual.reviews (id, value, user_id, event_id, created_at, updated_at) VALUES (29, 4, 27, 12, '2023-07-05 15:36:32', '2023-07-05 15:36:34');
INSERT INTO skindividual.reviews (id, value, user_id, event_id, created_at, updated_at) VALUES (30, 5, 27, 13, '2023-07-05 15:36:32', '2023-07-05 15:36:34');
INSERT INTO skindividual.reviews (id, value, user_id, event_id, created_at, updated_at) VALUES (31, 2, 25, 13, '2023-07-05 15:36:32', '2023-07-05 15:36:34');
INSERT INTO skindividual.reviews (id, value, user_id, event_id, created_at, updated_at) VALUES (32, 4, 25, 14, '2023-07-05 15:36:32', '2023-07-05 15:36:34');
INSERT INTO skindividual.reviews (id, value, user_id, event_id, created_at, updated_at) VALUES (33, 5, 25, 19, '2023-07-05 15:41:38', '2023-07-05 15:41:41');
INSERT INTO skindividual.reviews (id, value, user_id, event_id, created_at, updated_at) VALUES (34, 1, 24, 19, '2023-07-05 15:41:38', '2023-07-05 15:41:41');
INSERT INTO skindividual.reviews (id, value, user_id, event_id, created_at, updated_at) VALUES (35, 4, 27, 19, '2023-07-05 15:41:38', '2023-07-05 15:41:41');
INSERT INTO skindividual.reviews (id, value, user_id, event_id, created_at, updated_at) VALUES (36, 5, 23, 19, '2023-07-05 15:41:38', '2023-07-05 15:41:41');
INSERT INTO skindividual.reviews (id, value, user_id, event_id, created_at, updated_at) VALUES (37, 4, 28, 19, '2023-07-05 15:41:38', '2023-07-05 15:41:41');
INSERT INTO skindividual.reviews (id, value, user_id, event_id, created_at, updated_at) VALUES (38, 5, 25, 19, '2023-07-05 15:41:38', '2023-07-05 15:41:41');


