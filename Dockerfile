# Sử dụng một hình ảnh cơ sở với Node.js đã cài đặt (ví dụ: Node 14)
FROM node:14

# Tạo thư mục /app trong container và thiết lập nó làm thư mục làm việc
WORKDIR /app

# Sao chép tập tin package.json và package-lock.json (hoặc yarn.lock) vào thư mục /app trong container
# Điều này giúp tận dụng cache khi chỉ có các tệp tin này thay đổi trong quá trình phát triển ứng dụng
COPY package*.json ./

# Cài đặt các gói phụ thuộc của ứng dụng
RUN npm install

# Sao chép mã nguồn ứng dụng vào thư mục /app trong container
COPY . .

# Cung cấp cổng mà ứng dụng sẽ lắng nghe (nếu cần)
EXPOSE 3000

# Khởi chạy ứng dụng khi container được chạy
CMD ["npm", "start"]
