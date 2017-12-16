<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('bn', array (
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'আপডেট গ্রুপ',
    'group.show.name' => 'গ্রুপের নাম',
    'group.new.submit' => 'গ্রুপ তৈরি',
    'group.flash.updated' => 'গ্রুপের তথ্য হালনাগাদ হয়েছে',
    'group.flash.created' => 'গ্রুপের তথ্য তৈরি করা হয়েছে',
    'group.flash.deleted' => 'গ্রুপের তথ্য মুছে ফেলা হয়েছে',
    'security.login.username' => 'ব্যবহারকারীর নাম',
    'security.login.password' => 'পাসওয়ার্ড',
    'security.login.remember_me' => 'আমাকে মনে রেখো',
    'security.login.submit' => 'লগ ইন',
    'profile.show.username' => 'ব্যবহারকারীর নাম',
    'profile.show.email' => 'ই-মেইল',
    'profile.edit.submit' => 'আপডেট',
    'profile.flash.updated' => 'প্রোফাইল আপডেট করা হয়েছে।',
    'change_password.submit' => 'পাসওয়ার্ড পরিবর্তন',
    'change_password.flash.success' => 'পাসওয়ার্ড পরিবর্তন সফল হয়েছো',
    'registration.check_email' => '%email% এড্রেসে একটি ই-মেইল পাঠানো হয়েছে. অ্যাকাউন্ট সক্রিয় করার জন্য ই-মেইলে পাঠানো লিংকটি ক্লিক করুন
',
    'registration.confirmed' => '%username% অভিনন্দন, আপনার অ্যাকাউন্ট এখন সক্রিয়।',
    'registration.back' => 'আগের পাতা',
    'registration.submit' => 'নিবন্ধন',
    'registration.flash.user_created' => 'ব্যবহারকারী সফলভাবে তৈরি করা হয়েছে',
    'registration.email.subject' => 'স্বাগতম %username%!',
    'registration.email.message' => 'হ্যালো %username%!

আপনার অ্যাকাউন্ট সক্রিয় করার জন্য - দয়া করে %confirmationUrl% লিংকটি ভিসিট করুর

এই লিঙ্কটি শুধুমাত্র একবার আপনার অ্যাকাউন্ট যাচাই করতে ব্যবহার করা যেতে পারে।

শুভেচ্চান্তে,
এডমিন।
',
    'resetting.check_email' => 'একটি ই-মেইল পাঠানো হয়েছে। পাসওয়ার্ড রিসেট করার জন্য ই-মেইলে পাঠানো লিংকটি ক্লিক করুন।
বিঃদ্রঃ  %tokenLifetime% ঘন্টার মধ্যে শুধুমাত্র একবার রিসেট পাসওয়ার্ড করতে পারবেন।

যদি ই-মেইল টি না পেয়ে থাকেন, তাহলে আপসার স্পাম ফোল্ডারে দেখুন অথবা আবার চেষ্টা করুন।
',
    'resetting.request.username' => 'ব্যবহারকারীর নাম অথবা ই-মেইল',
    'resetting.request.submit' => 'রিসেট পাসওয়ার্ড',
    'resetting.reset.submit' => 'পাসওয়ার্ড পরিবর্তন',
    'resetting.flash.success' => 'পাসওয়ার্ডটি সফলভাবো রিসেট করা হয়েছে',
    'resetting.email.subject' => 'রিসেট পাসওয়ার্ড',
    'resetting.email.message' => 'হ্যালো %username%!

আপনার পাসওয়ার্ড রিসেট করতে - দয়া করে %confirmationUrl% লিংকটি ভিসিট করুর

শুভেচ্চান্তে,
এডমিন।
',
    'layout.logout' => 'লগ আউট',
    'layout.login' => 'লগ ইন',
    'layout.register' => 'নিবন্ধন',
    'layout.logged_in_as' => '%username% হিসাবে লগ ইন করেছেন',
    'form.group_name' => 'গ্রুপের নাম',
    'form.username' => 'ব্যবহারকারীর নাম',
    'form.email' => 'ই-মেইল',
    'form.current_password' => 'বর্তমান পাসওয়ার্ড',
    'form.password' => 'পাসওয়ার্ড',
    'form.password_confirmation' => 'পাসওয়ার্ড আবার লিখুন',
    'form.new_password' => 'নতুন পাসওয়ার্ড',
    'form.new_password_confirmation' => 'নতুন পাসওয়ার্ড আবার লিখুন',
  ),
  'validators' => 
  array (
    'fos_user.username.already_used' => 'ব্যবহারকারীর নামটি ইতিমধ্যে ব্যবহার করা হয়েছে',
    'fos_user.username.blank' => 'অনুগ্রহ করে ব্যবহারকারীর নাম লিখুন',
    'fos_user.username.short' => 'নামটি থুবই ছোট',
    'fos_user.username.long' => 'নামটি থুবই বড়',
    'fos_user.email.already_used' => 'ই-মেইল টি ইতিমধ্যে ব্যবহার করা হয়েছে',
    'fos_user.email.blank' => 'অনুগ্রহ করে একটি ই-মেইল লিখুন',
    'fos_user.email.short' => 'ই-মেইল টি থুবই ছোট',
    'fos_user.email.long' => 'ই-মেইল টি থুবই বড়',
    'fos_user.email.invalid' => 'ই-মেইল টি সঠিক নয়',
    'fos_user.password.blank' => 'অনুগ্রহ করে পাসওয়ার্ড লিখুন',
    'fos_user.password.short' => 'পাসওয়ার্ড টি থুবই ছোট',
    'fos_user.password.mismatch' => 'পাসওয়ার্ডটি মেলেনি',
    'fos_user.new_password.blank' => 'অনুগ্রহ করে একটি নতুন পাসওয়ার্ড লিখুন',
    'fos_user.new_password.short' => 'নতুন পাসওয়ার্ড টি থুবই ছোট',
    'fos_user.current_password.invalid' => 'পাসওয়ার্ডটি সঠিক নয়',
    'fos_user.group.blank' => 'অনুগ্রহ করে একটি নাম লিখুন',
    'fos_user.group.short' => 'নামটি থুবই ছোট',
    'fos_user.group.long' => 'নামটি থুবই বড়',
    'fos_group.name.already_used' => 'নামটি ইতিমধ্যে ব্যবহার করা হয়েছে',
  ),
));

$catalogueRu = new MessageCatalogue('ru', array (
  'validators' => 
  array (
    'This value should be false.' => 'Значение должно быть ложным.',
    'This value should be true.' => 'Значение должно быть истинным.',
    'This value should be of type {{ type }}.' => 'Тип значения должен быть {{ type }}.',
    'This value should be blank.' => 'Значение должно быть пустым.',
    'The value you selected is not a valid choice.' => 'Выбранное Вами значение недопустимо.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Вы должны выбрать хотя бы {{ limit }} вариант.|Вы должны выбрать хотя бы {{ limit }} варианта.|Вы должны выбрать хотя бы {{ limit }} вариантов.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Вы должны выбрать не более чем {{ limit }} вариант.|Вы должны выбрать не более чем {{ limit }} варианта.|Вы должны выбрать не более чем {{ limit }} вариантов.',
    'One or more of the given values is invalid.' => 'Одно или несколько заданных значений недопустимо.',
    'This field was not expected.' => 'Это поле не ожидалось.',
    'This field is missing.' => 'Это поле отсутствует.',
    'This value is not a valid date.' => 'Значение не является правильной датой.',
    'This value is not a valid datetime.' => 'Значение даты и времени недопустимо.',
    'This value is not a valid email address.' => 'Значение адреса электронной почты недопустимо.',
    'The file could not be found.' => 'Файл не может быть найден.',
    'The file is not readable.' => 'Файл не может быть прочитан.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Файл слишком большой ({{ size }} {{ suffix }}). Максимально допустимый размер {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'MIME-тип файла недопустим ({{ type }}). Допустимы MIME-типы файлов {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Значение должно быть {{ limit }} или меньше.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Значение слишком длинное. Должно быть равно {{ limit }} символу или меньше.|Значение слишком длинное. Должно быть равно {{ limit }} символам или меньше.|Значение слишком длинное. Должно быть равно {{ limit }} символам или меньше.',
    'This value should be {{ limit }} or more.' => 'Значение должно быть {{ limit }} или больше.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Значение слишком короткое. Должно быть равно {{ limit }} символу или больше.|Значение слишком короткое. Должно быть равно {{ limit }} символам или больше.|Значение слишком короткое. Должно быть равно {{ limit }} символам или больше.',
    'This value should not be blank.' => 'Значение не должно быть пустым.',
    'This value should not be null.' => 'Значение не должно быть null.',
    'This value should be null.' => 'Значение должно быть null.',
    'This value is not valid.' => 'Значение недопустимо.',
    'This value is not a valid time.' => 'Значение времени недопустимо.',
    'This value is not a valid URL.' => 'Значение не является допустимым URL.',
    'The two values should be equal.' => 'Оба значения должны быть одинаковыми.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Файл слишком большой. Максимально допустимый размер {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Файл слишком большой.',
    'The file could not be uploaded.' => 'Файл не может быть загружен.',
    'This value should be a valid number.' => 'Значение должно быть числом.',
    'This value is not a valid country.' => 'Значение не является допустимой страной.',
    'This file is not a valid image.' => 'Файл не является допустимым форматом изображения.',
    'This is not a valid IP address.' => 'Значение не является допустимым IP адресом.',
    'This value is not a valid language.' => 'Значение не является допустимым языком.',
    'This value is not a valid locale.' => 'Значение не является допустимой локалью.',
    'This value is already used.' => 'Это значение уже используется.',
    'The size of the image could not be detected.' => 'Не удалось определить размер изображения.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Ширина изображения слишком велика ({{ width }}px). Максимально допустимая ширина {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Ширина изображения слишком мала ({{ width }}px). Минимально допустимая ширина {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Высота изображения слишком велика ({{ height }}px). Максимально допустимая высота {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Высота изображения слишком мала ({{ height }}px). Минимально допустимая высота {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Значение должно быть текущим паролем пользователя.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Значение должно быть равно {{ limit }} символу.|Значение должно быть равно {{ limit }} символам.|Значение должно быть равно {{ limit }} символам.',
    'The file was only partially uploaded.' => 'Файл был загружен только частично.',
    'No file was uploaded.' => 'Файл не был загружен.',
    'No temporary folder was configured in php.ini.' => 'Не настроена временная директория в php.ini.',
    'Cannot write temporary file to disk.' => 'Невозможно записать временный файл на диск.',
    'A PHP extension caused the upload to fail.' => 'Расширение PHP вызвало ошибку при загрузке.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Эта коллекция должна содержать {{ limit }} элемент или больше.|Эта коллекция должна содержать {{ limit }} элемента или больше.|Эта коллекция должна содержать {{ limit }} элементов или больше.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Эта коллекция должна содержать {{ limit }} элемент или меньше.|Эта коллекция должна содержать {{ limit }} элемента или меньше.|Эта коллекция должна содержать {{ limit }} элементов или меньше.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Эта коллекция должна содержать ровно {{ limit }} элемент.|Эта коллекция должна содержать ровно {{ limit }} элемента.|Эта коллекция должна содержать ровно {{ limit }} элементов.',
    'Invalid card number.' => 'Неверный номер карты.',
    'Unsupported card type or invalid card number.' => 'Неподдерживаемый тип или неверный номер карты.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Значение не является допустимым международным номером банковского счета (IBAN).',
    'This value is not a valid ISBN-10.' => 'Значение имеет неверный формат ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Значение имеет неверный формат ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Значение не соответствует форматам ISBN-10 и ISBN-13.',
    'This value is not a valid ISSN.' => 'Значение не соответствует формату ISSN.',
    'This value is not a valid currency.' => 'Некорректный формат валюты.',
    'This value should be equal to {{ compared_value }}.' => 'Значение должно быть равно {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Значение должно быть больше чем {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Значение должно быть больше или равно {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Значение должно быть идентичным {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Значение должно быть меньше чем {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Значение должно быть меньше или равно {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Значение не должно быть равно {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Значение не должно быть идентичным {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Соотношение сторон изображения слишком велико ({{ ratio }}). Максимальное соотношение сторон {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Соотношение сторон изображения слишком мало ({{ ratio }}). Минимальное соотношение сторон {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Изображение квадратное ({{ width }}x{{ height }}px). Квадратные изображения не разрешены.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Изображение в альбомной ориентации ({{ width }}x{{ height }}px). Изображения в альбомной ориентации не разрешены.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Изображение в портретной ориентации ({{ width }}x{{ height }}px). Изображения в портретной ориентации не разрешены.',
    'An empty file is not allowed.' => 'Пустые файлы не разрешены.',
    'The host could not be resolved.' => 'Имя хоста не может быть разрешено.',
    'This value does not match the expected {{ charset }} charset.' => 'Значение не совпадает с ожидаемой {{ charset }} кодировкой.',
    'This form should not contain extra fields.' => 'Эта форма не должна содержать дополнительных полей.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Загруженный файл слишком большой. Пожалуйста, попробуйте загрузить файл меньшего размера.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF значение недопустимо. Пожалуйста, попробуйте повторить отправку формы.',
    'fos_user.username.already_used' => 'Логин уже используется.',
    'fos_user.username.blank' => 'Пожалуйста, укажите логин.',
    'fos_user.username.short' => 'Логин слишком короткий.',
    'fos_user.username.long' => 'Логин слишком длинный.',
    'fos_user.email.already_used' => 'Email уже используется.',
    'fos_user.email.blank' => 'Пожалуйста, укажите Ваш email.',
    'fos_user.email.short' => 'Email слишком короткий.',
    'fos_user.email.long' => 'Email слишком длинный.',
    'fos_user.email.invalid' => 'Email в неправильном формате.',
    'fos_user.password.blank' => 'Пожалуйста, укажите пароль.',
    'fos_user.password.short' => 'Пароль слишком короткий.',
    'fos_user.password.mismatch' => 'Введенные пароли не совпадают.',
    'fos_user.new_password.blank' => 'Пожалуйста, укажите новый пароль.',
    'fos_user.new_password.short' => 'Новый пароль слишком короткий.',
    'fos_user.current_password.invalid' => 'Вы неправильно ввели Ваш текущий пароль.',
    'fos_user.group.blank' => 'Пожалуйста, укажите название группы.',
    'fos_user.group.short' => 'Название группы слишком короткое.',
    'fos_user.group.long' => 'Название группы слишком длинное.',
    'fos_group.name.already_used' => 'Имя уже используется.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Ошибка аутентификации.',
    'Authentication credentials could not be found.' => 'Аутентификационные данные не найдены.',
    'Authentication request could not be processed due to a system problem.' => 'Запрос аутентификации не может быть обработан в связи с проблемой в системе.',
    'Invalid credentials.' => 'Недействительные данные для авторизации.',
    'Cookie has already been used by someone else.' => 'Cookie уже был использован кем-то другим.',
    'Not privileged to request the resource.' => 'Отсутствуют права на запрос этого ресурса.',
    'Invalid CSRF token.' => 'Недействительный токен CSRF.',
    'Digest nonce has expired.' => 'Время действия одноразового ключа дайджеста истекло.',
    'No authentication provider found to support the authentication token.' => 'Не найден провайдер аутентификации, поддерживающий токен аутентификации.',
    'No session available, it either timed out or cookies are not enabled.' => 'Сессия не найдена, ее время истекло, либо cookies не включены.',
    'No token could be found.' => 'Токен не найден.',
    'Username could not be found.' => 'Имя пользователя не найдено.',
    'Account has expired.' => 'Время действия учетной записи истекло.',
    'Credentials have expired.' => 'Время действия аутентификационных данных истекло.',
    'Account is disabled.' => 'Учетная запись отключена.',
    'Account is locked.' => 'Учетная запись заблокирована.',
  ),
  'VichUploaderBundle' => 
  array (
    'download' => 'Скачать',
    'form.label.delete' => 'Удалить?',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Обновить группу',
    'group.show.name' => 'Название группы',
    'group.new.submit' => 'Создать группу',
    'group.flash.updated' => 'Группа обновлена.',
    'group.flash.created' => 'Группа создана.',
    'group.flash.deleted' => 'Группа удалена.',
    'security.login.username' => 'Логин или email:',
    'security.login.password' => 'Пароль',
    'security.login.remember_me' => 'Запомнить меня',
    'security.login.submit' => 'Войти',
    'profile.show.username' => 'Имя пользователя',
    'profile.show.email' => 'Электронная почта',
    'profile.edit.submit' => 'Обновить',
    'profile.flash.updated' => 'Профиль пользователя обновлен.',
    'change_password.submit' => 'Изменить пароль',
    'change_password.flash.success' => 'Пароль изменен.',
    'registration.check_email' => 'Письмо отправлено на адрес %email%. В нём содержится ссылка, по которой вы можете подтвердить свою регистрацию.',
    'registration.confirmed' => 'Поздравляем, %username%, Вы успешно зарегистрировались!',
    'registration.back' => 'Вернуться на предыдущую страницу.',
    'registration.submit' => 'Зарегистрироваться',
    'registration.flash.user_created' => 'Пользователь успешно создан.',
    'registration.email.subject' => 'Добро пожаловать, %username%!',
    'registration.email.message' => 'Приветствуем, %username%!

Для подтверждения вашей регистрации, пройдите по ссылке %confirmationUrl%

Эта ссылка может быть использована только единожды для подтверждения вашей учетной записи.

С наилучшими пожеланиями,
команда сайта.
',
    'resetting.check_email' => 'Письмо отправлено. Оно содержит ссылку, при переходе по которой ваш пароль будет сброшен.
Заметьте, вы сможете запросить новый пароль только через %tokenLifetime% часов.

Если вы не получили письмо, проверьте папку Спам или попробуйте снова.
',
    'resetting.request.username' => 'Имя пользователя или электронная почта',
    'resetting.request.submit' => 'Сбросить пароль',
    'resetting.reset.submit' => 'Изменить пароль',
    'resetting.flash.success' => 'Пароль успешно сброшен.',
    'resetting.email.subject' => 'Сброс пароля',
    'resetting.email.message' => 'Приветствуем, %username%!

Для сброса пароля, пожалуйста, пройдите по ссылке %confirmationUrl%

С наилучшими пожеланиями,
команда сайта.
',
    'layout.logout' => 'Выход',
    'layout.login' => 'Вход',
    'layout.register' => 'Регистрация',
    'layout.logged_in_as' => 'Вы вошли как %username%',
    'form.group_name' => 'Название группы',
    'form.username' => 'Логин для входа на сайт (латинскими буквами):',
    'form.email' => 'Электронная почта',
    'form.current_password' => 'Текущий пароль',
    'form.password' => 'Пароль',
    'form.password_confirmation' => 'Подтвердите пароль',
    'form.new_password' => 'Новый пароль',
    'form.new_password_confirmation' => 'Подтвердите пароль',
  ),
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Назад',
    'label_next' => 'Вперед',
  ),
));
$catalogue->addFallbackCatalogue($catalogueRu);

return $catalogue;
