# Проект для курсовой работы (Фреймворк Yii2)
Проект для курсовой работы ДГТУ 3 курс ИиВТ (Сайт ГиБДД с доступом к БД)

# Скриншоты работы

<p align = "center">
 <img src = "https://user-images.githubusercontent.com/38008327/175385549-e631955d-0c5f-424b-83bc-1a7104df1f13.png"/>
</p>

<p align = "center">
 <img src = "https://user-images.githubusercontent.com/38008327/175385576-24751efe-4d6e-4a43-b75b-924ebec9027a.png"/>
</p>

<p align = "center">
 <img src = "https://user-images.githubusercontent.com/38008327/175385587-e468ab10-5133-4e56-afee-5a879f5a85c8.png"/>
</p>

<p align = "center">
 <img src = "https://user-images.githubusercontent.com/38008327/175385593-aab83003-c9cd-4e96-961d-6ac1ff988430.png"/>
</p>

<p align = "center">
 <img src = "https://user-images.githubusercontent.com/38008327/175385597-7ede2a45-59cb-4c23-a60e-d56bd1a65794.png"/>
</p>

<p align = "center">
 <img src = "https://user-images.githubusercontent.com/38008327/175385607-b6b52f52-e1a2-4b5f-b87d-e30ec43ab4df.png"/>
</p>

# Установка Yii
Вы можете установить Yii двумя способами: используя Composer или скачав архив. 

# Установка через Composer
Если Composer еще не установлен это можно сделать по инструкции на getcomposer.org, или одним из нижеперечисленных способов. 
На Windows, скачайте и запустите Composer-Setup.exe.
В случае возникновения проблем читайте раздел "Troubleshooting" в документации Composer. Если вы только начинаете использовать Composer, рекомендуем прочитать как минимум раздел "Basic usage".

Предполагается, что Composer установлен глобально. То есть он доступен через команду composer. Если вы используете composer.phar из локальной директории, изменяйте команды соответственно.

Если у вас уже установлен Composer, обновите его при помощи composer self-update.
После установки Composer устанавливать Yii можно запустив следующую команду в папке доступной через веб:
composer create-project --prefer-dist yiisoft/yii2-app-basic basic
Эта команда устанавливает последнюю стабильную версию Yii в директорию basic. Если хотите, можете выбрать другое имя директории.

# Установка из архива
Установка Yii из архива состоит из трёх шагов:
1.	Скачайте архив с yiiframework.com;
2.	Распакуйте скачанный архив в папку, доступную из Web.
3.	В файле config/web.php добавьте секретный ключ в значение cookieValidationKey (при установке через Composer это происходит автоматически):
// !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
'cookieValidationKey' => 'enter your secret key here',
Проверка установки
После установки приложение будет доступно по следующему URL:
http://localhost/basic/web/index.php
Здесь подразумевается, что вы установили приложение в директорию basic в корневой директории вашего веб сервера сервер работает локально (localhost). Вам может потребоваться предварительно его настроить.

Для корректной работы фреймворка вам необходима установка PHP, соответствующая его минимальным требованиям. Основное требование — PHP версии 5.4 и выше. Если ваше приложение работает с базой данных, необходимо установить расширение PHP PDO и соответствующий драйвер (например, pdo_mysql для MySQL).
