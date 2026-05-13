# Ukraine Sale - WordPress WooCommerce Theme

Современная кастомная дочерняя тема (Child Theme) для ShopStore с интеграцией 4 категорий товаров и Google Ads.

## 🎯 Функционал

- ✅ **4 категории товаров**: Rest & Pool, Fishing, Kids, Auto
- ✅ **24 готовых товара** (по 6 в каждой категории)
- ✅ **Красивые карточки товаров** с анимациями
- ✅ **Google Ads блоки** в 3 местах на странице
- ✅ **Администраторская панель** для управления настройками
- ✅ **Отзывчивый дизайн** (mobile-friendly)
- ✅ **Гладкие анимации** и переходы
- ✅ **Оптимизировано для SEO**

## 📦 Что включено

```
shopstore-child/
├── style.css              # Основные стили (1200+ строк)
├── functions.php          # Функции и админка
├── page-home.php          # Шаблон главной страницы
├── js/custom.js           # Интерактивность и анимации
└── README.md             # Это документация
```

## 🚀 Установка

### Требования
- WordPress 6.0+
- PHP 7.4+
- Установленная тема **ShopStore** (родительская тема)
- WooCommerce плагин

### Пошаговая установка

1. **Скачай код с GitHub**
   ```
   https://github.com/zMeowz/ukraine-sale → Code → Download ZIP
   ```

2. **Распакуй архив**
   ```
   ukraine-sale-main.zip → ukraine-sale/shopstore-child/
   ```

3. **Загрузи в WordPress**
   ```
   WordPress Admin → Внешний вид → Темы → Загрузить тему
   → Выбери распакованную папку
   → Установить и активировать
   ```

4. **Готово!** 🎉
   Главная страница автоматически загрузится с товарами

## 🎨 Товары (24 шт)

### 🏖️ Rest & Pool (6 товаров)
- Beach Mat Pro ($25.49)
- Swimming Mask Set ($39.99)
- Water Ball Combo ($31.49)
- Water Gun Pro Max ($33.74)
- Pool Float Premium ($52.79)
- UV Beach Umbrella ($32.79)

### 🎣 Fishing (6 товаров)
- Fishing Chair Deluxe ($70.19)
- Fishing Table ($47.99)
- Tackle Box Pro ($55.99)
- Fishing Rod Set ($110.49)
- Fish Net Ultra ($35.99)
- Lure Collection ($37.49)

### 🧸 Kids Seasonal (6 товаров)
- Summer Surfboard ($36.97)
- Winter Roller Skates ($57.39)
- Spring Skateboard ($63.99)
- Spring Kite ($21.99)
- Building Block Set ($46.19)
- Yo-Yo Pro ($17.99)

### 🚗 Auto (6 товаров)
- Magnetic Phone Mount ($20.87)
- Dash Cam 4K ($140.39)
- Dual USB Car Charger ($21.24)
- Car Interior Cleaner ($27.99)
- Air Purifier Filter ($40.99)
- LED Emergency Kit ($30.79)

## ⚙️ Управление через Админку

### Настройки темы
```
WordPress Admin → Ukraine Sale → Settings
```

Здесь ты можешь:
- 📝 Менять заголовок героя
- 📝 Менять подзаголовок
- 📺 Включать/отключать Google Ads
- 📺 Вставлять код Google AdSense

### Добавление собственных товаров

Текущие товары закодированы в `functions.php` функции `ukraine_sale_get_products()`.

Для добавления своих товаров:

1. Открой `shopstore-child/functions.php`
2. Найди функцию `ukraine_sale_get_products()`
3. Добавь новый товар в нужную категорию:

```php
array(
    'name' => 'Название товара',
    'price' => '$10.99',
    'original_price' => '$19.99',
    'discount' => '-45%',
    'emoji' => '🏖️',
    'desc' => 'Описание товара'
)
```

## 🎨 Кастомизация

### Цвета

Измени в `style.css` переменные:

```css
:root {
  --primary-color: #ff6b35;      /* Оранжевый */
  --secondary-color: #004e89;    /* Синий */
  --accent-color: #f7931e;       /* Жёлтый */
  /* ... другие цвета */
}
```

### Google Ads

1. Получи код от Google AdSense
2. Иди в **Ukraine Sale → Settings**
3. Вставь код в поле **Google AdSense Code**
4. Включи **Enable Google Ads**

Блоки появятся в 3 местах:
- Вверху (после героя)
- В середине (между категориями)
- Внизу (в конце страницы)

## 🐛 Решение проблем

### Тема не активируется
- ✅ Убедись, что установлена родительская тема **ShopStore**
- ✅ Проверь, что используешь PHP 7.4+

### Товары не отображаются
- ✅ Перезагрузи страницу (Ctrl+F5)
- ✅ Очистить кэш браузера
- ✅ Перейти на главную страницу сайта

### Google Ads не появляются
- ✅ Включи **Enable Google Ads** в настройках
- ✅ Вставь валидный код AdSense
- ✅ Убедись, что нет ошибок в консоли браузера

### Стили не загружаются
- ✅ Перезагрузи страницу (Ctrl+F5)
- ✅ Очистить кэш WordPress (если используешь плагины кэша)
- ✅ Проверь консоль браузера (F12 → Console)

## 📱 Мобильная оптимизация

Тема полностью отзывчива и оптимизирована для всех устройств:
- ✅ Мобильные телефоны
- ✅ Планшеты
- ✅ Десктопы

## 🔍 SEO Оптимизация

- ✅ Семантический HTML5
- ✅ Быстрая загрузка (оптимизирована)
- ✅ Mobile-first approach
- ✅ Структурированные данные готовы

## 📈 Google Analytics

Добавь Google Analytics код в свой вордпресс:
1. Иди в **WordPress Admin → Settings → Site Health**
2. Или используй плагин **Google Site Kit**

## 📄 Лицензия

MIT License - используй свободно!

## 🤝 Поддержка

Если у тебя есть вопросы:
- 📝 Создай Issue на GitHub
- 💬 Свяжись со мной

---

**Создано для:** ukraine-sale
**Версия:** 1.0.0
**Обновлено:** 2026-05-13
