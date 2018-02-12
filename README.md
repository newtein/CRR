# Centralized Reviews and Ratings - "Review Pool"
Developed an integrated platform for reviews and ratings of multiple services namely, Hotels, Food, Flights and Jobs. In-order to aggregate the information we used API's of TripAdvisor, Zomato, goibibo and GlassDoor.

### Illustrative Readme with snapshots of implemented Web-Application.


![alt text](https://raw.githubusercontent.com/newtein/CRR/master/UI/1.%20welcome_page.JPG)

## Problem Statement

Just before using or buying any service we tend to check its reviews and ratings from various online websites, Through this project we attempt to provide user a single platfrom to browse reviews and ratings. The major outcome of this project is concept of real time crawling. We provide information to user on real time basis without using rigid databases. Currently we provided four services namely Hotels, Restaurants, Flights and Workplaces. For this we have integrated various API from many famous websites.


## Technologies Used

Front-End: Bootstrap, JQuery, JSON, AJAX, CSS and Python (Beautiful soup, Requests)
Back-End: PHP 

Database Type
Realtime: Majorly Dynamic Crawling
MySQL: For storing IDs

## Hotels: 

Goibibo API: Parsed using JSON
This api is not the affiliate api of Goibibo. (Used for learning purpose only)

![alt text](https://raw.githubusercontent.com/newtein/CRR/master/UI/2.%20hotelsearch.JPG)
### Search results for Noida, India
![alt text](https://raw.githubusercontent.com/newtein/CRR/master/UI/3.%20realtime_dynamic_results.JPG)

### Reviews and Ratings

![alt text](https://raw.githubusercontent.com/newtein/CRR/master/UI/4.%20real_time_reviews.JPG)
### All Reviews
![alt text](https://raw.githubusercontent.com/newtein/CRR/master/UI/5.%20all%20reviews.JPG)

## Flights:

TripAdvisor: Prased using HTML Dom Elements and Regex
![alt text](https://raw.githubusercontent.com/newtein/CRR/master/UI/14.%20flights_search.JPG)

### Search Results for Air India
![alt text](https://raw.githubusercontent.com/newtein/CRR/master/UI/15.%20flight_results.JPG)
### Reviews and Ratings
![alt text](https://raw.githubusercontent.com/newtein/CRR/master/UI/16.%20flight_reviews.JPG)

## Restaurant:

Zomato: Parsed using JSON
![alt text](https://raw.githubusercontent.com/newtein/CRR/master/UI/10.%20Restaurant_search.JPG)

### Search Results for Noida, India
![alt text](https://raw.githubusercontent.com/newtein/CRR/master/UI/11.%20results.JPG)

### Reviews and Ratings

![alt text](https://raw.githubusercontent.com/newtein/CRR/master/UI/12.%20reviews_n_ratings.JPG)

### More Reviews and Ratings

![alt text](https://raw.githubusercontent.com/newtein/CRR/master/UI/13.%20more_reviews.JPG)

## Workplaces:

GlassDoor: Parsed using JSON

![alt text](https://raw.githubusercontent.com/newtein/CRR/master/UI/6.%20workplaces_search.JPG)

### Search Results for Samsung, Bangalore, India
![alt text](https://raw.githubusercontent.com/newtein/CRR/master/UI/7.results_glassdoor.JPG)

### CEO Reviews

![alt text](https://raw.githubusercontent.com/newtein/CRR/master/UI/8.%20ceo_reviews.JPG)

### Pros and Cons

![alt text](https://raw.githubusercontent.com/newtein/CRR/master/UI/9.%20pros_n_cons.JPG)

