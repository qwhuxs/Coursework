# API Documentation (Postman) — Bag Store API

Документація описує два ключові методи взаємодії фронтенду з бекендом.

---

## 1. Отримання списку всіх сумок

- **Метод:** `GET`
- **URL:** `/api/products` (або `index.php?action=get_products`)
- **Опис:** Повертає масив об'єктів усіх товарів, що є в наявності.

### Приклад відповіді (200 OK):
```json
[
  {
    "id": 1,
    "name": "Шкіряна сумка-шопер",
    "price": 3200,
    "stock": 5
  },
  {
    "id": 2,
    "name": "Міський рюкзак",
    "price": 1500,
    "stock": 12
  }
]

## 2. Створення замовлення (Оформлення)

**Метод:** POST  
**URL:** `/api/order/create`

### Тіло запиту (JSON):
```json
{
  "user_id": 5,
  "items": [
    { "product_id": 1, "quantity": 1 }
  ],
  "total_price": 3200
}