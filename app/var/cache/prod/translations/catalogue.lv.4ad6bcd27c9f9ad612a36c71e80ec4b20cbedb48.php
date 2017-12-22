<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('lv', array (
  'validators' => 
  array (
    'This value should be false.' => 'Šai vērtībai ir jābūt nepatiesai.',
    'This value should be true.' => 'Šai vērtībai ir jābūt patiesai.',
    'This value should be of type {{ type }}.' => 'Šīs vērtības tipam ir jābūt {{ type }}.',
    'This value should be blank.' => 'Šai vērtībai ir jābūt tukšai.',
    'The value you selected is not a valid choice.' => 'Vērtība, kuru jūs izvēlējāties nav derīga izvēle.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Jums nav jāveic izvēle.|Jums ir jāveic vismaz {{ limit }} izvēle.|Jums ir jāveic vismaz {{ limit }} izvēles.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Jums nav jāveic izvēle.|Jums ir jāveic ne vairāk kā {{ limit }} izvēle.|Jums ir jāveic ne vairāk kā {{ limit }} izvēles.',
    'One or more of the given values is invalid.' => 'Viena vai vairākas no dotajām vērtībām ir nederīgas.',
    'This field was not expected.' => 'Šis lauks netika gaidīts.',
    'This field is missing.' => 'Šis lauks ir pazudis.',
    'This value is not a valid date.' => 'Šī vērtība ir nederīgs datums.',
    'This value is not a valid datetime.' => 'Šī vērtība ir nederīgs datums un laiks',
    'This value is not a valid email address.' => 'Šī vērtība ir nederīga e-pasta adrese.',
    'The file could not be found.' => 'Fails nav atrasts.',
    'The file is not readable.' => 'Fails nav lasāms.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fails ir pārāk liels ({{ size }} {{ suffix }}). Atļautais maksimālais izmērs ir {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Faila mime tips nav derīgs ({{ type }}). Atļautie mime tipi ir {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Šai vērtībai ir jābūt ne vairāk kā {{ limit }}.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Šīs vērtības garums ir 0 rakstzīmju.|Šī vērtība ir pārāk gara. Tai būtu jābūt ne vairāk kā {{ limit }} rakstzīmei.|Šī vērtība ir pārāk gara. Tai būtu jābūt ne vairāk kā {{ limit }} rakstzīmēm.',
    'This value should be {{ limit }} or more.' => 'Šai vērtībai ir jābūt ne mazāk kā {{ limit }}.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Šīs vērtības garums ir 0 rakstzīmju.|Šī vērtība ir pārāk īsa. Tai būtu jābūt ne mazāk kā {{ limit }} rakstzīmei.|Šī vērtība ir pārāk īsa. Tai būtu jābūt ne mazāk kā {{ limit }} rakstzīmēm.',
    'This value should not be blank.' => 'Šai vērtībai nav jābūt tukšai.',
    'This value should not be null.' => 'Šai vērtībai nav jābūt null.',
    'This value should be null.' => 'Šai vērtībai ir jābūt null.',
    'This value is not valid.' => 'Šī vērtība ir nederīga.',
    'This value is not a valid time.' => 'Šī vērtība ir nederīgs laiks.',
    'This value is not a valid URL.' => 'Šī vērtība ir nederīgs URL.',
    'The two values should be equal.' => 'Abām vērtībām jābūt vienādam.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fails ir pārāk liels. Atļautais maksimālais izmērs ir {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Fails ir pārāk liels.',
    'The file could not be uploaded.' => 'Failu nevarēja augšupielādēt.',
    'This value should be a valid number.' => 'Šai vērtībai ir jābūt derīgam skaitlim.',
    'This file is not a valid image.' => 'Šis fails nav derīgs attēls.',
    'This is not a valid IP address.' => 'Šī nav derīga IP adrese.',
    'This value is not a valid language.' => 'Šī vērtība nav derīga valoda.',
    'This value is not a valid locale.' => 'Šī vērtība nav derīga lokalizācija.',
    'This value is not a valid country.' => 'Šī vērtība nav derīga valsts.',
    'This value is already used.' => 'Šī vērtība jau tiek izmantota.',
    'The size of the image could not be detected.' => 'Nevar noteikt attēla izmēru.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Attēla platums ir pārāk liels ({{ width }}px). Atļautais maksimālais platums ir {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Attēla platums ir pārāk mazs ({{ width }}px). Minimālais sagaidāmais platums ir {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Attēla augstums ir pārāk liels ({{ height }}px). Atļautais maksimālais augstums ir {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Attēla augstums ir pārāk mazs ({{ height }}px). Minimālais sagaidāmais augstums ir {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Šai vērtībai ir jābūt lietotāja pašreizējai parolei.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Šīs vērtības garums ir 0 rakstzīmju.|Šai vērtībai ir jābūt tieši {{ limit }} rakstzīmei.|Šai vērtībai ir jābūt tieši {{ limit }} rakstzīmēm.',
    'The file was only partially uploaded.' => 'Fails bija tikai daļēji augšupielādēts.',
    'No file was uploaded.' => 'Fails netika augšupielādēts.',
    'No temporary folder was configured in php.ini.' => 'Pagaidu mape php.ini failā nav nokonfigurēta.',
    'Cannot write temporary file to disk.' => 'Nevar ierakstīt pagaidu failu uz diska.',
    'A PHP extension caused the upload to fail.' => 'PHP paplašinājums izraisīja augšupielādes neizdošanos.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Šis krājums satur 0 elementu.|Šim krājumam jāsatur vismaz {{ limit }} elementu.|Šim krājumam jāsatur vismaz {{ limit }} elementus.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Šis krājums satur 0 elementu.|Šim krājumam jāsatur ne vairāk kā {{ limit }} elementu.|Šim krājumam jāsatur ne vairāk kā {{ limit }} elementus.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Šis krājums satur 0 elementu.|Šim krājumam jāsatur tieši {{ limit }} elementu.|Šim krājumam jāsatur tieši {{ limit }} elementus.',
    'Invalid card number.' => 'Nederīgs kartes numurs.',
    'Unsupported card type or invalid card number.' => 'Neatbalstīts kartes tips vai nederīgs kartes numurs.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Šis nav derīgs starptautisks banku konta numurs (IBAN).',
    'This value is not a valid ISBN-10.' => 'Šī vērtība nav derīgs ISBN-10 numurs.',
    'This value is not a valid ISBN-13.' => 'Šī vērtība nav derīgs ISBN-13 numurs',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Šī vērtība neatbilst ne derīgam ISBN-10 numuram, ne derīgm ISBN-13 numuram.',
    'This value is not a valid ISSN.' => 'Šī vērtība nav derīgs ISSN numurs',
    'This value is not a valid currency.' => 'Šī vērtība nav derīga valūta',
    'This value should be equal to {{ compared_value }}.' => 'Šai vērtībai ir jābūt vienādai ar {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Šai vērtībai ir jābūt lielākai par {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Šai vērtībai ir jābūt lielākai vai vienādai ar {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Šai vērtībai ir jābūt identiskai ar {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Šai vērtībai ir jābūt mazākai par {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'TŠai vērtībai ir jābūt mazākai vai vienādai ar {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Šai vērtībai ir jābūt vienādai ar {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Šai vērtībai nav jābūt identiskai ar {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Attēla attiecība ir pārāk liela ({{ ratio }}). Atļautā maksimālā attiecība ir {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Attēla attiecība ir pārāk maza ({{ ratio }}). Minimālā sagaidāmā attiecība ir {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Šis attēls ir kvadrāts ({{ width }}x{{ height }}px). Kvadrātveida attēli nav atļauti.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Attēls ir orientēts kā ainava ({{ width }}x{{ height }}px). Attēli, kas ir orientēti kā ainavas nav atļauti.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Attēls ir orientēts kā portrets ({{ width }}x{{ height }}px). Attēli, kas ir orientēti kā portreti nav atļauti.',
    'An empty file is not allowed.' => 'Tukšs fails nav atļauts.',
    'The host could not be resolved.' => 'Resursdatora nosaukumu nevar atrisināt.',
    'This value does not match the expected {{ charset }} charset.' => 'Šī vērtība neatbilst sagaidāmajai rakstzīmju kopai {{ charset }}.',
    'This form should not contain extra fields.' => 'Šajā veidlapā nevajadzētu būt papildus ievades laukiem.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Augšupielādētā faila izmērs bija par lielu. Lūdzu mēģiniet augšupielādēt mazāka izmēra failu.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Dotais CSRF talons nav derīgs. Lūdzu mēģiniet vēlreiz iesniegt veidlapu.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Radās autentifikācijas kļūda.',
    'Authentication credentials could not be found.' => 'Autentifikācijas dati nav atrasti.',
    'Authentication request could not be processed due to a system problem.' => 'Autentifikācijas pieprasījums nevar tikt apstrādāts sistēmas problēmas dēļ.',
    'Invalid credentials.' => 'Nederīgi autentifikācijas dati.',
    'Cookie has already been used by someone else.' => 'Kāds cits jau izmantoja sīkdatni.',
    'Not privileged to request the resource.' => 'Nav tiesību ši resursa izsaukšanai.',
    'Invalid CSRF token.' => 'Nederīgs CSRF talons.',
    'Digest nonce has expired.' => 'Vienreiz lietojamās atslēgas darbības laiks ir beidzies.',
    'No authentication provider found to support the authentication token.' => 'Nav atrasts, autentifikācijas talonu atbalstošs, autentifikācijas sniedzējs.',
    'No session available, it either timed out or cookies are not enabled.' => 'Sesija nav pieejama - vai nu tā beidzās, vai nu sīkdatnes nav iespējotas.',
    'No token could be found.' => 'Nevar atrast nevienu talonu.',
    'Username could not be found.' => 'Nevar atrast lietotājvārdu.',
    'Account has expired.' => 'Konta derīguma termiņš ir beidzies.',
    'Credentials have expired.' => 'Autentifikācijas datu derīguma termiņš ir beidzies.',
    'Account is disabled.' => 'Konts ir atspējots.',
    'Account is locked.' => 'Konts ir slēgts.',
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
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Назад',
    'label_next' => 'Вперед',
  ),
  'FOSUserBundle' => 
  array (
    'registration.confirmed' => 'Поздравляем, %username%, Вы успешно зарегистрировались!',
    'security.login.username' => 'Логин или email:',
    'form.username' => 'Логин для входа на сайт (латинскими буквами):',
  ),
));
$catalogue->addFallbackCatalogue($catalogueRu);

return $catalogue;
