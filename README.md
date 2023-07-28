## Food Recipe Sharing Web App

Web Objectives:
- Allow users to view shared recipes on the website.
- Enable users to rate and leave reviews for recipes.
- Provide the functionality to add recipes to a favorites list.
- Allow administrators to perform CRUD operations for recipe management.

How to Use (First-Time User):
1. clone the repo in your desired directory by running git clone <URL>
2. run **composer install** in your project directory to install all dependencies required to run your project
3. run **copy .env.example .env**
4. Open your .env file and check DB_DATABASE, DB_USERNAME, DB_PASSWORD, and MAKE SURE your DB_PORT is same as your wamp
5. Run **php artisan key:generate**
6. Create a database call **"foodbank" (utf8mb4_unicode_ci)** and Run php artisan migrate
7. Run **npm install and npm run dev / npm install && npm run dev**
8. Open new cmd and run **php artisan serve**

To run server:
1. Run npm run dev
2. Open new terminal and run php artisan serve


Sample Image of the Web App:
![image](https://github.com/cwh0430/Food-Recipe-Sharing-Web-App/assets/108912628/4be0a670-7d11-4837-9766-6faa378fb22d)

Home page of the Web App with navbar, search, and filter functions


![image](https://github.com/cwh0430/Food-Recipe-Sharing-Web-App/assets/108912628/8846095b-343a-47da-9d37-ad588c1b0e5c)
![image](https://github.com/cwh0430/Food-Recipe-Sharing-Web-App/assets/108912628/f9365909-7de8-4045-b915-e1bfb7d16e13)

Recipe Details Page along with Reviews and random recipe recommendations displayed 

CRUD of Recipes:
![image](https://github.com/cwh0430/Food-Recipe-Sharing-Web-App/assets/108912628/748efb43-4c4b-444c-9f77-8f665f13b4ea)

View Recipe List/ Delete a Particular Recipe


![image](https://github.com/cwh0430/Food-Recipe-Sharing-Web-App/assets/108912628/21022605-fe3f-4c1a-82b6-83b5f352ac88)
Create New Recipe Page


![image](https://github.com/cwh0430/Food-Recipe-Sharing-Web-App/assets/108912628/513e8246-23e2-4c3d-886e-f840f48a3cdb)

Edit Existing Recipe Page



