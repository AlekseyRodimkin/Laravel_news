# Веб-приложение новостей

Это веб-приложение для новостей, построенное на базе Laravel, которое позволяет пользователям просматривать актуальные/все новости, читать детальные статьи и оставлять комментарии. Приложение имеет адаптивный дизайн и функции как для администратора, так и для обычных пользователей.

## Функциональные возможности

-   📰 **Последние новости**: Отображение новейших статей.
-   📋 **Лента**: Отображение всех новостей.
-   💬 **Система комментариев**: Пользователи могут оставлять комментарии под новостями.
-   📝 **Форма обратной связи**: Пользователи могут писать обращения.
-   🔐 **Аутентификация пользователей**: Регистрация пользователей, вход в систему и доступ по ролям (Администратор/Пользователь).
-   📊 **Панель администратора**: Управление статьями и пользователями через административную панель.

## Установка

Следуйте этим шагам, чтобы развернуть проект на вашем локальном компьютере.

### Предварительные требования

-   PHP 7.3
-   Composer
-   Laravel 8.83.27
-   MySQL или другая совместимая база данных
-   Node.js

### Шаги установки

1. Клонируйте репозиторий:

    ```bash
    git clone https://github.com/AlekseyRodimkin/Laravel_news.git
    ```

2. Перейдите в директорию проекта

3. Установите зависимости:

    ```bash
    composer install
    ```

4. Установите зависимости JavaScript:

    ```bash
    npm install
    ```

5. Скопируйте файл `.env.example` и переименуйте его в `.env`. Настройте базу данных и другие параметры:

    ```bash
    cp .env.example .env
    ```

6. Настройте подключение к базе данных в файле `.env`:
7. Сгенерируйте ключ приложения:

    ```bash
    php artisan key:generate
    ```

8. Запустите миграции для создания необходимых таблиц в базе данных:

    ```bash
    php artisan migrate
    ```

9. Заполните базу данных тестовыми данными (необязательно):

    ```bash
    php artisan db:seed
    ```

---

![Регистрация](https://github.com/AlekseyRodimkin/travel_diary/raw/main/README_images/register.png)
![Вход](https://github.com/AlekseyRodimkin/travel_diary/raw/main/README_images/login.png)
![Письмо](https://github.com/AlekseyRodimkin/travel_diary/raw/main/README_images/email.png)
![Профиль](https://github.com/AlekseyRodimkin/travel_diary/raw/main/README_images/profile.png)
![Главная](https://github.com/AlekseyRodimkin/travel_diary/raw/main/README_images/main.png)
![Лента](https://github.com/AlekseyRodimkin/travel_diary/raw/main/README_images/explore.png)
![Пост](https://github.com/AlekseyRodimkin/travel_diary/raw/main/README_images/post.png)
![Форма](https://github.com/AlekseyRodimkin/travel_diary/raw/main/README_images/contact.png)
![История](https://github.com/AlekseyRodimkin/travel_diary/raw/main/README_images/contact_history.png)
![Обращение](https://github.com/AlekseyRodimkin/travel_diary/raw/main/README_images/appeal.png)

![Пользователи](https://github.com/AlekseyRodimkin/travel_diary/raw/main/README_images/admin_users.png)
![Посты](https://github.com/AlekseyRodimkin/travel_diary/raw/main/README_images/admin_posts.png)
![Обращения](https://github.com/AlekseyRodimkin/travel_diary/raw/main/README_images/admin_contacts.png)
![Редактирование](https://github.com/AlekseyRodimkin/travel_diary/raw/main/README_images/change_post.png)
