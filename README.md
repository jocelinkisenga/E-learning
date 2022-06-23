# E-learning application

<p>This application for the june challenge of the club of developpers</p>

## purpose
Build an api that will help front-end developpers to retreive data from the backend application

## Installation
To install this application run 
```git
git clone https://github.com/jocelinkisenga/E-learning.git
```
And navigate to the application folder then run 
```git
composer install 
```
to install composer's dependances

## API DOCS (front-end)

### Course end-point
<p> To fetch all the courses the end-point is ** /courses ** whith the http method GET 
</p>

<strong>results</strong>
```
{
    "0": "all courses",
    "course": [
        {
            "id": 23,
            "owner_id": 5,
            "title": "kisenga1@gmail.com",
            "description": "jocelinkisenga",
            "number_chapters": null,
            "created_at": "2022-06-23T13:33:17.000000Z",
            "updated_at": "2022-06-23T13:33:17.000000Z",
            "image": "1655991197_téléchargement.jpeg"
        },
        {
            "id": 22,
            "owner_id": 3,
            "title": "kisenga1@gmail.com",
            "description": "jocelinkisenga",
            "number_chapters": null,
            "created_at": "2022-06-23T13:07:54.000000Z",
            "updated_at": "2022-06-23T13:07:54.000000Z",
            "image": "1655989674_téléchargement.jpeg"
        },
        {
            "id": 21,
            "owner_id": 4,
            "title": "python",
            "description": "learn python in one day and learn it well",
            "number_chapters": null,
            "created_at": "2022-06-23T12:56:36.000000Z",
            "updated_at": "2022-06-23T12:56:36.000000Z",
            "image": "1655988996_téléchargement.jpeg"
        }],
      }
     ```




## requirements
> php v8
> laravel 9

<strong> build with love by Jocelin kisenga </strong>