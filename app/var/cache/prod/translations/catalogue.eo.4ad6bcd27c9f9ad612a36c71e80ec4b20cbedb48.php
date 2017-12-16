<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('eo', array (
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Aktualigi',
    'group.show.name' => 'Grupnomo',
    'group.new.submit' => 'Krei grupon',
    'group.flash.updated' => 'La grupo estas aktualigita.',
    'group.flash.created' => 'La grupo estas kreita.',
    'group.flash.deleted' => 'La grupo estas forigita.',
    'security.login.username' => 'Uzantnomo',
    'security.login.password' => 'Pasvorto',
    'security.login.remember_me' => 'Memoru min',
    'security.login.submit' => 'Ensaluti',
    'profile.show.username' => 'Uzantnomo',
    'profile.show.email' => 'Retpoŝtadreso',
    'profile.edit.submit' => 'Aktualigi',
    'profile.flash.updated' => 'La profilo estas aktualigita.',
    'change_password.submit' => 'Ŝanĝi la pasvorton',
    'change_password.flash.success' => 'La pasvorto estas ŝanĝita',
    'registration.check_email' => 'Por fini la registriĝon bonvolu alklaki la ligilon en la retpoŝtmesaĝo, kiun ni ĵus sendis al vi. Se vi ne ricevis la mesaĝon, kontrolu vian spam-dosierujon.
',
    'registration.confirmed' => 'Gratulon %username%, via konto estas aktiva.',
    'registration.back' => 'Reiri al la origina paĝo.',
    'registration.submit' => 'Registriĝi',
    'registration.flash.user_created' => 'La uzanto estis kreita.',
    'registration.email.subject' => 'Bonvenon %username%!',
    'registration.email.message' => 'Saluton %username%!

Por kompletigi la aktivigadon de via konto - Bonvolu viziti %confirmationUrl%

Ĉi tiu ligilo povas validigi nur vian konton.

Amike,
la Teamo.
',
    'resetting.check_email' => 'Ni sendis retpoŝtmesaĝon al vi. Ĝi enhavas ligilon, kiun vi devas alklaki por ŝanĝi vian pasvorton.
Rimarku: Vi nur povas uzi la ligilon dum %tokenLifetime% horoj.

Se vi ne ricevis la mesaĝon, kontrolu vian spam-dosierujon.
',
    'resetting.request.username' => 'Uzantnomo aŭ retpoŝtadreso',
    'resetting.request.submit' => 'Ŝanĝi la Pasvorton',
    'resetting.reset.submit' => 'Ŝanĝi la Pasvorton',
    'resetting.flash.success' => 'La pasvorto estas sukcese ŝanĝita.',
    'resetting.email.subject' => 'Ŝanĝi la pasvorton',
    'resetting.email.message' => 'Saluton %username%!

Por ŝanĝi la pasvorton - Bonvolu viziti %confirmationUrl%

Amike,
la Teamo.
',
    'layout.logout' => 'Elsaluti',
    'layout.login' => 'Ensaluti',
    'layout.register' => 'Registriĝi',
    'layout.logged_in_as' => 'Ensalutita kiel %username%',
    'form.group_name' => 'Grupnomo',
    'form.username' => 'Uzantnomo',
    'form.email' => 'Retpoŝtadreso',
    'form.current_password' => 'Nuna pasvorto',
    'form.password' => 'Pasvorto',
    'form.password_confirmation' => 'Retajpu pasvorton',
    'form.new_password' => 'Nova pasvorto',
    'form.new_password_confirmation' => 'Retajpu novan pasvorton',
  ),
  'validators' => 
  array (
    'fos_user.username.already_used' => 'Tiu ĉi uzantnomo estas jam okupita.',
    'fos_user.username.blank' => 'Enmetu vian uzantnomo.',
    'fos_user.username.short' => 'La uzantnomo estas tro mallonga.',
    'fos_user.username.long' => 'La uzantnomo estas tro longa.',
    'fos_user.email.already_used' => 'Tiu ĉi retpoŝtadreso jam estas registrita.',
    'fos_user.email.blank' => 'Enmetu validan retpoŝtan adreson.',
    'fos_user.email.short' => 'La retpoŝtadreso estas tro mallonga.',
    'fos_user.email.long' => 'La retpoŝtadreso estas tro longa.',
    'fos_user.email.invalid' => 'La retpoŝtadreso ne estas valida.',
    'fos_user.password.blank' => 'Enmetu pasvorton.',
    'fos_user.password.short' => 'La pasvorto estas tro mallonga.',
    'fos_user.password.mismatch' => 'La pasvortoj ne samas.',
    'fos_user.new_password.blank' => 'Bonvolu enmeti novan pasvorton.',
    'fos_user.new_password.short' => 'La nova pasvorto estas tro mallonga.',
    'fos_user.current_password.invalid' => 'La pasvorto estas nevalida.',
    'fos_user.group.blank' => 'Bonvolu enmeti grupnomon.',
    'fos_user.group.short' => 'La nomo estas tro mallonga.',
    'fos_user.group.long' => 'La nomo estas tro longa.',
    'fos_group.name.already_used' => 'La grupnomon estas jam okupita.',
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
