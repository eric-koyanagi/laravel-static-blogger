# laravel-static-blogger
A laravel simple article creator that creates static files from database-driven content, allowing for hosting a very cheap blog or documentation repository.

# What is this for?
This project allows a tech-savvy author to host simple articles or blog posts without the overhead of a hosted blog. Using a very simple UI, this allows a user to create one or more articles. These are converted to static files (complete with headers, footers, auto-generated links, images, and content) and uploaded to Amazon's S3.

Additionally, the app generates a simple "index" for articles that allows search engines or users to browse. 

# Why?
This isn't a robust, full-featured system, but it allows someone to host basic content for very little money (and without the overhead, security flaws, and annoyance of spinning up Wordpress or other platforms). 

Also, this application is meant to be a demonstration of my skills as a LAMP developer, specifically for the laravel platform.

# More about hosting a blog for a dollar per month
As an example, see https://articles.erickoyanagi.com/hosting-a-blog-on-s3-for-pennies-a-month.html -- this both describes how the platform works and why I went through the (few days of) trouble to make it. 

# How to use the system
This is a Laravel 10 project. Clone it and run `php artisan migrate` after checking the `.env` file and updating the database credentials as needed. Then simply run `php artisan serve` to run the project locally and navigate to the typical laravel local home `http://127.0.0.1:8000/` to access the app. Click the "New Article" button to create a new article. 

You must also provide AWS crednetials in your `.env`, but sure that the IAM user tied to these credentials has the ability to write to your S3 bucket! 

Not sure how to set up CloudFront so that it can serve files from S3 on your custom domain? Follow the steps in the online article (https://articles.erickoyanagi.com/hosting-a-blog-on-s3-for-pennies-a-month.html), which work great as of August 2023. 
