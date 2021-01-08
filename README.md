## Album App Test 2
Basic CRUD for Album and Photos <br/>
API: Laravel 7.X <br/>
FE: Quasar <br/>

## Setup

Install dependencies<br/>
`php composer.phar install`

Run migration<br/>
`php artisan migrate`

Run Database Seeder. This will take a few minutes<br/>
`php artisan db:seed`

Start app<br/>
`php artisan serve`
## API LIST

### ALBUMS
GET     api/albums         - Returns all albums with corresponding photos<br/>
GET     api/albums/{id}    - Returns single Album<br/>
POST    api/albums         - Creates new Album<br/>
PUT     api/albums/{id}    - Updates an Album<br/>
DELETE  api/albums/{id}    - Soft Deletes an Album<br/>

### PHOTOS
GET     api/photos         - Returns all photos<br/>
GET     api/photos/{id}    - Returns single Photo<br/>
POST    api/photos         - Creates new Photo<br/>
PUT     api/photos/{id}    - Updates a Photo<br/>
DELETE  api/photos/{id}    - Soft Deletes a Photo<br/>
