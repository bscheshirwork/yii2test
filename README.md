Yii 2 Basic и пример дейсвия
================================

Yii 2 Basic - скелет для мелких приложений, идеально подходящий для примера

ДИРЕКТОРИИ, в которых были изменения
-------------------

      config/             contains application configurations
      controllers/        contains Web controller classes
      models/             contains model classes
      views/              contains view files for the Web application
      web/                contains the entry script and Web resources



ЗАВИСИМОСТИ
------------

Минимальная версия PHP 5.4.0.


УСТАНОВКА
------------

Установите PostgreSQL или MySQL

Разверните данный репозиторий


КОНФИГУРАЦИЯ
-------------

### Database

Измените `config/db.php` подставив реальные данные, как в примере ниже для MySQL (или в примере в самом config/db.php для PostgreSQL):

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=yii2basic',
    'username' => 'root',
    'password' => '1234',
    'charset' => 'utf8',
];
```

МИГРАЦИИ
-------------

Для завершения установки выполните `php yii migrate`


О ЗАДАНИИ
-------------

Для выполнения данного примера:
1. Установлен PostgreSQL, база и пользователи созданы из консоли. Установлен phppgadmin;
2. Установлен и настроен под yii2 composer;
3. Создан виртхост для проектов yii2;
4. Установлен Yii2 посредством comoser'a, настроено соединение с бд;
5. Создана и выполнена миграция для создания таблиц;
6. Созданы модели посредством gii;
7. Создана и выполнена миграция для заполнения таблиц;
8. Созданы контроллер, действие-пример, изменены отображения.