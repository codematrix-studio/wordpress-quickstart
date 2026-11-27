# Компиляция SCSS в PhpStorm

Для компиляции SCSS используется Dart Sass и встроенный механизм PhpStorm File Watchers. Отдельный frontend-сборщик не требуется.

## 1. Установка Dart Sass

Для Sass CLI требуется Node.js. Если Dart Sass ещё не установлен:

```bash
npm install -g sass
sass --version
```

Если PhpStorm не находит Sass автоматически, укажите полный путь к исполняемому файлу `sass.cmd` (Windows) или `sass` (Linux/macOS).

## 2. Настройка File Watcher

1. Откройте **Settings → Tools → File Watchers**.
2. Добавьте шаблон **SCSS**.
3. В поле **Program** укажите Dart Sass.
4. В поле **Arguments** укажите:

```text
--update $ProjectFileDir$/frontend/scss:$ProjectFileDir$/wp-content/themes/quickstart/assets/css --style=expanded
```

5. В поле **Output paths to refresh** укажите:

```text
$ProjectFileDir$/wp-content/themes/quickstart/assets/css/main.css:$ProjectFileDir$/wp-content/themes/quickstart/assets/css/main.css.map
```

6. Ограничьте Scope каталогом `frontend/scss/`.
7. Сохраните настройки и проверьте компиляцию после изменения SCSS.

## 3. Исходники

Основная точка входа — `frontend/scss/main.scss`. Подключайте partial-файлы через `@use`. Имена partial-файлов начинаются с подчёркивания, например `_variables.scss`.

При компиляции каталога Sass создаёт CSS в соответствующем выходном каталоге. Partial-файлы не становятся самостоятельными CSS-файлами.

## 4. Замечания

- Изменяйте SCSS, а не сгенерированный CSS.
- CSS сохраняется в Git: серверу WordPress не нужны Sass и Node.js.
- JavaScript подключается напрямую, без сборки и транспиляции.

## Справка

- [Sass в PhpStorm](https://www.jetbrains.com/help/phpstorm/transpiling-sass-less-and-scss-to-css.html)
- [File Watchers](https://www.jetbrains.com/help/phpstorm/using-file-watchers.html)
- [Dart Sass CLI](https://sass-lang.com/documentation/cli/dart-sass/)
