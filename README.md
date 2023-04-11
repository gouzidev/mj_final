PROJECT SETUP

- installer git
- verifier git => git --version
- make new folder in pc (STAGE -1)
- go inside the folder
- git init
- git config --global user.name "smitek hnaya"
- git config --global user.email "email hnaya"
- git remote add origin https://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@github.com/gouzidev/mj_final.git
- git pull origin fe-final

- composer install
- npm install
- rename .env.example => .env
- setup .env (App name, db name ...)
- php artisan key:generate
- php artisan migrate

- (run project)
  * php artisan serve
  * npm run dev

(3mro database) :
*1- diro compte => http://127.0.0.1:8000/login
*2- rdoh admin mn => http://localhost/phpmyadmin  (is_admin => 1)
*3- dkhlo bl admin => http://127.0.0.1:8000/admin/login
*4- 3mro db

DONE
