# Bộ Giao Diện Bảo Trì Website (Modern SaaS)

Bộ giao diện bảo trì website hiện đại, phong cách Doanh nghiệp/Công nghệ (Modern SaaS), đã được Việt hóa hoàn toàn.

## 📂 Cấu trúc thư mục

- `index.html`: Trang chính thông báo bảo trì (Maintenance Mode).
- `go.php`: Trang chuyển hướng (Redirect) có đếm ngược.
- `404.html`: Trang thông báo lỗi không tìm thấy trang.
- `style.css`: File định kiểu chung (Centered Layout, Blue Theme).
- `script.js`: Xử lý logic thanh tiến độ và đếm ngược.

## 🚀 Hướng dẫn sử dụng

### 1. Trang Bảo Trì (index.html)
- **Chỉnh sửa thời gian đếm ngược**:
  Mở file `script.js`, tìm dòng:
  ```javascript
  let totalSeconds = 2 * 3600 + 45 * 60 + 12; // Giờ * 3600 + Phút * 60 + Giây
  ```
- **Chỉnh sửa tiến độ (Progress Bar)**:
  Mở file `script.js`, tìm dòng:
  ```javascript
  const target = 75; // Thay đổi số % mong muốn
  ```

### 2. Trang Chuyển Hướng (go.php)
- Mở file `go.php` để chỉnh cấu hình ở đầu file:
  ```php
  $redirect_url = "https://thptchuyenbentre.edu.vn/" . $url; // Link đích
  $seconds_wait = 10; // Thời gian chờ (giây)
  ```

### 3. Tùy chỉnh màu sắc & Logo
- **Màu sắc**: Mở `style.css` và chỉnh sửa biến `:root`:
  ```css
  :root {
      --primary: #0f172a; /* Màu xanh đen chủ đạo */
      --accent: #2563eb;  /* Màu xanh dương điểm nhấn */
      /* ... */
  }
  ```
- **Logo**: Tìm class `.logo` trong `index.html` để thay thế tên thương hiệu hoặc icon.

---
*Created by Gemini Antigravity*
